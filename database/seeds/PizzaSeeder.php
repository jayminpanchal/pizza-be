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
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 298]
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
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 404]
                ]
            ],
            [
                'name' => 'Cheese n Tomato',
                'description' => 'A delectable combination of cheese and juicy tomato',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 165],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 240],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 165],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 305],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 355],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 404]
                ]
            ],
            [
                'name' => 'Achari Do Pyaza',
                'description' => 'Tangy & spicy achari flavours on a super cheesy onion pizza- as desi as it gets!',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 165],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 240],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 165],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 305],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 355],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 404]
                ]
            ],
            [
                'name' => 'Double Cheese Margherita',
                'description' => 'A classic delight loaded with extra 100% real mozzarella cheese',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 185],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 260],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 185],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 335],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 335],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 434]
                ]
            ],
            [
                'name' => 'Fresh Veggie',
                'description' => 'Delectable combination of onion & capsicum, a veggie lovers pick',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 185],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 260],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 185],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 335],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 335],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 434]
                ]
            ],
            [
                'name' => 'Paneer Makhani',
                'description' => 'Flavorful twist of spicy makhani sauce topped with paneer & capsicum',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 215],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 290],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 215],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 395],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 445],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 494]
                ]
            ],
            [
                'name' => 'Paneer Makhani',
                'description' => 'Flavorful twist of spicy makhani sauce topped with paneer & capsicum',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 215],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 290],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 215],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 395],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 445],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 494]
                ]
            ],
            [
                'name' => 'Farm House',
                'description' => 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes',
                'sizes' => [1, 2],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 215],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 290],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 215],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 395],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 445],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 494]
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
