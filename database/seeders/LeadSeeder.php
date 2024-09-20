<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leads = Lead::factory(50)->create();
        $leads->each(function (Lead $lead) {
            if (rand(1, 10) < 4) {
                Contact::factory()->create([
                    'lead_id' => $lead->id,
                    'contact_name' => $lead->lead_name,
                    'converted_status' => $lead->status,
                ]);
            }
        });
    }
}
