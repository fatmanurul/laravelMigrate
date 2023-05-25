<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        $data = "halaman1";
        return view('bebas',compact(['data']));
       }

    function halaman2(){
        $data1 = "halaman2";
        return view('halaman2',compact(['data1']));
    }function welcome(){
        $data =[

        ['judul' => 'judul pertama','subject' => 'halo'],
        ['judul' => 'judul pertama','subject' => 'hai'],
        ['judul' => 'judul pertama','subject' => 'gararetek']
    ];
        return view('konten',compact(['data']));
    }
}
