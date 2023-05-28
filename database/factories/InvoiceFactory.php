<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Recipient;
use App\Models\Sender;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::get()->random(),
            'sender_id' => Sender::get()->random(),
            'recipient_id' => Recipient::get()->random(),
            'departure_id' => City::get()->random(),
            'arrival_id' => City::get()->random(),
        ];
    }
}
