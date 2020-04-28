<?php

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            "Regular", "Medium", "Large"
        ];
        foreach ($rows as $row) {
            $size = new Size();
            $size->name = $row;
            $size->save();
        }
    }
}
