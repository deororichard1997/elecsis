<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Product::class, 10)->create();
        //Product::factory(10)->create();

        DB::table('products')->insert([
            'referencia' => '1234',
			'producto' => 'Mouse',
			'cantidad' => '20',
			'precio_unitario' => '24000',
			'precio_total' => '480000',
			'created_at' => '2020-09-19 14:00:00',
			'updated_at' => '2020-09-19 14:00:00'
        ]);
    }
}
