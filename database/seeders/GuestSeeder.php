<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'John Doe',
            'institution_id' => 2,
            'from' => 'University of Indonesia',
            'phonenumber' => '081234567890',
            'email' => 'johndoe@email.com',
            'note' => 'Test'
        ]);
    }
}
