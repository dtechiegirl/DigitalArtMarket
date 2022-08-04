<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('arts')->insert([
            'name'=> 'Temi',
            'price'=> '1500',
            'category'=>'Picture',
            'description'=> '1eth woth Nft',
            'gallery'=> 'https://cdn.nft.com/gk-min/12.jpeg',
            'seller' => 'Fola',
            'seller-contact'=> '07026541856'
        ]);
            
    }
}
