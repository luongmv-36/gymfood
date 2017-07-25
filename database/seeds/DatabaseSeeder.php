<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' =>'Admin Name',
        'username' =>'luongmv',
        'email'=>'luongmv@yahoo.com',
        'password'=>Hash::make(12345678),
        'is_admin'=>1
        ]);

        DB::table('category')->insert([
            'id'=>1,
            'name'=> 'Vitamin',
            'active' =>1
        ]);
        DB::table('category')->insert([
            'id'=>2,
            'name'=> 'WheyProtein',
            'active' =>1
        ]);
        // $this->call(UsersTableSeeder::class);
        for ($i = 0; $i<= 10;$i++) {
            DB::table('products')->insert([
                'name' => 'Product Test Vitamin ' . rand(1, 20),
                'price' => rand(100, 900),
                'category_id' => 1,
                'images' => 'products/small/1500949752.jpg',
                'images_zoom' => 'products/large/1500949752.jpg',
                'description' => '<p><strong>Features</strong></p>
                                                            <ul>
                                                            <li>Creatine-Free&nbsp;pre-workout formula with fat burning ingredients that help athletes to train harder while supporting fat burning</li>
                                                            </ul>
                                                            <p><strong>Benefits</strong></p>
                                                            <ul>
                                                            <li>Enhance focus and boost energy for high-intensity workout</li>
                                                            <li>Reduce lactic acid build up and optimize nutrient level for working muscles</li>
                                                            <li>Convert body fats into usable energy</li>
                                                            </ul>',
                'short_description' => 'Creatine-Free pre-workout formula with fat burning ingredients that help athletes to train harder while supporting fat burning',
                'active' => 1
            ]);
            }
        for ($i = 0; $i<= 10;$i++) {
            DB::table('products')->insert([
                'name' => 'Product Test Whey ' . rand(1, 20),
                'price' => rand(100, 900),
                'category_id' => 2,
                'images' => 'products/small/1500951095.jpg',
                'images_zoom' => 'products/large/1500951095.jpg',
                'description' => '<p><strong>Features</strong></p>
                                                            <ul>
                                                            <li>Creatine-Free&nbsp;pre-workout formula with fat burning ingredients that help athletes to train harder while supporting fat burning</li>
                                                            </ul>
                                                            <p><strong>Benefits</strong></p>
                                                            <ul>
                                                            <li>Enhance focus and boost energy for high-intensity workout</li>
                                                            <li>Reduce lactic acid build up and optimize nutrient level for working muscles</li>
                                                            <li>Convert body fats into usable energy</li>
                                                            </ul>',
                'short_description' => 'Creatine-Free pre-workout formula with fat burning ingredients that help athletes to train harder while supporting fat burning',
                'active' => 1
            ]);
        }
    }
}
