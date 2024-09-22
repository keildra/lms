<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $leads = Lead::factory(50)->create();
        $leads->each(function (Lead $lead) use ($faker) {
            if ($faker->boolean(25)) {
                Contact::factory()->create([
                    'lead_id' => $lead->id,
                    'contact_name' => $lead->lead_name,
                    'converted_status' => $lead->status,
                ]);
                $lead->update(['converted_at' => $faker->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d H:i:s')]);
            }
        });
    }
}
