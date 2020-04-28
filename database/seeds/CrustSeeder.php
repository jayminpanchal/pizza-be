<?php

use App\Models\Crust;
use Illuminate\Database\Seeder;

class CrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            "New Hand Tossed", "Wheat Thin Crust", "Cheese Burst", "Classic Hand Tossed"
        ];
        foreach ($rows as $row) {
            $size = new Crust();
            $size->name = $row;
            $size->save();
        }
    }
}
