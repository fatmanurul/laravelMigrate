<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
function tambah_data1(){
      return view('tambah_user');
   }
   function input_data1(Request $request){
       $user = new User();
       $user ->nama  = $request->nama;
       $user ->kelas = $request->kelas;
       $user ->nis   = $request->nis;
       $user ->save();
       return redirect('/tampil_data1');
   }
   function tampil_data1(){
      $data = User::all();
    return view('data_siswa1',compact(['data']));
   }
   function hapus_data1($id){
      // dd($id);
      $data = User::whereId($id)->delete();
      return redirect('/tampil_data1');
   }
   function edit_data1($id){
      // dd($id);
      $data = User::whereId($id)->first();
      return view('edit_data1',compact(['data']));
   }
   function update_data1($id,Request $request){
      $data = User::whereId($id)->first();
      $data->nama = $request->nama;
      $data->kelas = $request->kelas;
      $data->nis = $request->nis;
      $data->save();
      return redirect('/tampil_data1');
   }
}
