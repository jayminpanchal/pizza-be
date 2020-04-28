<?php

use App\Models\Pizza;
use App\Models\PizzaCrust;
use App\Models\PizzaPrices;
use App\Models\PizzaSize;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'name' => 'Margherita',
                'description' => 'A classic delight with 100% Real mozzarella cheese',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 174],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 249],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 298]
                ]
            ],
            [
                'name' => 'Cheese n Corn',
                'description' => 'Sweet & Juicy Golden corn and 100% real mozzarella cheese in a delectable combination!',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 165],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 240],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 165],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 305],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 355],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 404]
                ]
            ]
        ];

        foreach ($rows as $row) {
            $pizza = new Pizza();
            $pizza->name = $row['name'];
            $pizza->description = $row['description'];
            $pizza->save();

            foreach ($row['sizes'] as $size) {
                $pizzaSize = new PizzaSize();
                $pizzaSize->pizza_id = $pizza->id;
                $pizzaSize->size_id = $size;
                $pizzaSize->save();
            }

            foreach ($row['crusts'] as $crust) {
                $pizzaCrust = new PizzaCrust();
                $pizzaCrust->pizza_id = $pizza->id;
                $pizzaCrust->crust_id = $crust;
                $pizzaCrust->save();
            }

            foreach ($row['prices'] as $price) {
                $pizzaPrice = new PizzaPrices();
                $pizzaPrice->pizza_id = $pizza->id;
                $pizzaPrice->crust_id = $price['crust_id'];
                $pizzaPrice->size_id = $price['size_id'];
                $pizzaPrice->price = $price['price'];
                $pizzaPrice->save();
            }
        }
    }
}
