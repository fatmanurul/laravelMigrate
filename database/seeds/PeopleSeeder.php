<?php

use Illuminate\Database\Seeder;
use App\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        People::insert([
            'nama' =>"fatma nurul",
            'alamat' =>"sompok",
            'umur' =>"17",
            'status_pekerjaan' =>"siswa",
            ] ) ;
            People::insert([
                'nama' =>"tia sasmita",
                'alamat' =>"cbr",
                'umur' =>"17",
                'status_pekerjaan' =>"siswa",
                ] ) ;
            People::insert([
                 'nama' =>"zahwa nur",
                 'alamat' =>"tbs",
                 'umur' =>"17",
                 'status_pekerjaan' =>"siswa",
                 ] ) ;
                 People::insert([
                    'nama' =>"intan sari",
                    'alamat' =>"sekeawi",
                    'umur' =>"16",
                    'status_pekerjaan' =>"siswa",
                    ] ) ;
                    People::insert([
                        'nama' =>"syipa az-zahra",
                        'alamat' =>"patrol",
                        'umur' =>"16",
                        'status_pekerjaan' =>"siswa",
                        ] ) ;
                    People::insert([
                         'nama' =>"mpit fitri",
                         'alamat' =>"cbr",
                         'umur' =>"16",
                         'status_pekerjaan' =>"siswa",
                         ] ) ;
    }
}
