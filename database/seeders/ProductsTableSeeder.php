<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Collibri',
            'price' => 10,
            'image_url' => 'https://images.pexels.com/photos/1096750/pexels-photo-1096750.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'description' => 'Complete photo album, Monthly exclusives, Access to previews'
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'name' => 'Toucan',
            'price' => 25,
            'image_url' => 'https://images.pexels.com/photos/14412045/pexels-photo-14412045.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'description' => 'Complete photo album, Monthly exclusives, Access to previews, 1 custom photo per month, Access to the premium photo album'
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Eagle',
            'price' => 50,
            'image_url' => 'https://images.pexels.com/photos/133356/pexels-photo-133356.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'description' => 'Complete photo album, Monthly exclusives, Access to previews, 1 custom photo per month, Access to the premium photo album, Access to the Trivalia discussion channel, Participation in excursions with the team of photographers'
        ]);

    }
}