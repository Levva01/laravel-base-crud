<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {

            $newProduct = new Product();

            $newProduct->title = $comic['title'];
            $newProduct->description = $comic['description'];
            $newProduct->price = $comic['price'];
            $newProduct->series = $comic['series'];
            $newProduct->type = $comic['type'];
            $newProduct->thumb = $comic['thumb'];


            $newProduct->save();
        }
    }
}
