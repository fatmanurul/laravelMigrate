<?php

use Illuminate\Database\Seeder;
use App\Awikwok;

class AwikwokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Awikwok::insert([
        'nama' =>"gg",
        ] ) ;

      
    }
}
