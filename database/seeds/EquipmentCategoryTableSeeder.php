<?php

use App\EquipmentCategory;
use Illuminate\Database\Seeder;

class EquipmentCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
    {
        //insert 5 categories
        $categories = [
        	['name' => 'Blender'],
        	['name' => 'Toaster'],
        	['name' => 'Juicer'],
        	['name' => 'Fryer'],
        	['name' => 'Stove'],
        ];
        EquipmentCategory::insert($categories);
    }
}
