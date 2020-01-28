<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \App\User::truncate();
        \App\Category::truncate();
        \App\Transaction::truncate();
        \App\Product::truncate();
        \Illuminate\Support\Facades\DB::table('category_product')->truncate();

        $userQuantity =1000;
        $categoryQuantity =30;
        $productQuantity =1000;
        $transactionQuantity =1000;

        factory(\App\User::class,$userQuantity)->create();
        factory(\App\Category::class,$categoryQuantity)->create();
        factory(\App\Product::class,$productQuantity)->create()->each(
            function ($product){
                $categories = \App\Category::all()->random(mt_rand(1,5))->pluck('id');
                $product->category()->attach($categories);

            }
        );
       factory(\App\Transaction::class,$transactionQuantity)->create();


        // $this->call(UsersTableSeeder::class);
    }
}
