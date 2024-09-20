<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stage' => $this->faker->randomElement(['Will Send Ticket', 'Closed Won', 'Closed Lost']),
        ];
    }
}
