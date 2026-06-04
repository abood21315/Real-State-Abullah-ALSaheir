<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Property;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    protected $model = Property::class;
public function definition(): array
{
    return [
        // 'property_type' => $this->faker->randomElement(['Apartment', 'Villa', 'House', 'Studio']),

        // 'address' => $this->faker->streetAddress(),
        // 'city' => $this->faker->city(),
        // 'state' => $this->faker->state(),
        // 'zip_code' => $this->faker->postcode(),

        // 'price' => $this->faker->numberBetween(50000, 500000),

        // 'bed_rooms' => $this->faker->numberBetween(1, 6),
        // 'bath_rooms' => $this->faker->numberBetween(1, 4),
        // 'square_footage' => $this->faker->numberBetween(800, 5000),
        // 'year_built' => $this->faker->year(),

        // 'date_listed' => $this->faker->date(),

        // 'listing_status' => $this->faker->randomElement(['available', 'sold', 'pending']),

        // 'main_image' => 'https://via.placeholder.com/640x480.png',
    ];
}
}