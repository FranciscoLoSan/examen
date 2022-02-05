<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = new Brand;
        $brand->name = 'Chevrolet';
        $brand->save();

        $brand = new Brand;
        $brand->name = 'Ford';
        $brand->save();
    }
}
