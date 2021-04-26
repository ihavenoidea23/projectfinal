<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert( [
            [
            'name'=>'Шарм Pandora',
            "price"=>"300",
            "description"=>"Silver",
            "category"=>"ring",
            "gallery"=>"https://www.kazyuvelir.kz/i/Photos/175_pl.jpg?t=1584348786"
        ],
        [
            'name'=>'Reflexion',
            "price"=>"400",
            "description"=>"Silver",
            "category"=>"ring",
            "gallery"=>"https://www.kazyuvelir.kz/catalog/255-koltso/"
        ],
        [
            'name'=>'Aru',
            "price"=>"500",
            "description"=>"A tv with much more feature",
            "category"=>"podveska",
            "gallery"=>"https://www.kazyuvelir.kz/i/Photos/320_pl.jpg?t=1584441234"
        ],
        [
            'name'=>'Ai',
            "price"=>"200",
            "description"=>"Silver",
            "category"=>"earings",
            "gallery"=>"https://www.kazyuvelir.kz/i/Photos/288_pl.jpg?t=1584358354"
         ]
    ]);
}
}