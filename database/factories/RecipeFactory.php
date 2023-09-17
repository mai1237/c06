<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>fake()->sentence(mt_rand(3,8)),
            'excerpt'=>fake()->text(),
            'instructions'=>fake()->realText(400),
            'description'=>fake()->realText(480),
            'notes'=>fake()->realText(),
            'prepare_time'=>fake()->randomElement([8, 5, 10, 15, 20, 25, 30 ]),
            'cooking_time'=>fake()->randomElement([15, 30, 45, 60, 75, 90 ]),
            'servings'=>fake()->randomElement([2, 4, 6 ]),
            'youtube_url'=>fake()->randomElement([
                'https://www.youtube.com/watch?v=-be0BV7kcPk&t=3s',
                'https://www.youtube.com/watch?v=F0xUz53kLy4&t=8423s',
                'https://www.youtube.com/watch?app=desktop&v=TwA2zB9cP6E',
                'https://www.youtube.com/watch?v=Orb4SsPBFhk',
                'https://www.youtube.com/watch?v=mOSoUU0g6jk'
            ]),
            'is_low_carb'=>fake()->randomElement([true,false]) ,
            'is_high_protein'=>fake()->randomElement([true,false]) ,
            'is_spicy'=>fake()->randomElement([true,false]) ,
            'is_vegeterian'=>fake()->randomElement([true,false]) ,
            'is_vegan'=>fake()->randomElement([true,false]) ,
            'is_pescatarian'=>fake()->randomElement([true,false]) ,
            'view_count'=>fake()->randomElement([true,false]) ,
            'featured_at'=>fake()->randomElement([true,false]) ? now() : null,
        ];
    }
}
