<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->words($nb = 2, $asText = true); 
        $img = 'https://dummyimage.com/300x300/'.strtoupper(str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)).'/'.strtoupper(str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)).'.png&text='.str_replace(' ', '+', $title);
        $price = round(rand(500, 20000), -2);

        $discounts = [5,10,15,20,30,50,75];
        shuffle($discounts);
        $discountedPrice = $price - ($price * (reset($discounts) / 100));

        return [
            'name' => $title,
            'description' => $this->faker->sentence(rand(10, 25),true),
            'price' => $price,
            'sale_price' => $discountedPrice,
            'stock' => $this->faker->numberBetween($min = 6, $max = 111),
            'available' => 1,
            'image' => $img,
         ];
    }
}
