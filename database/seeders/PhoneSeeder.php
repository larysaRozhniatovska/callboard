<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::insert([
            'phone' => '+38(066) 786-45-78',
            'user_id' => '1',
        ]);
        Phone::insert([
            'phone' => '+38(063) 456-34-33',
            'user_id' => '1',
        ]);
        Phone::insert([
            'phone' => '+38(067) 345-87-34',
            'user_id' => '2',
        ]);
        Phone::insert([
            'phone' => '+38(063) 897-12-33',
            'user_id' => '2',
        ]);
        Phone::insert([
            'phone' => '+38(067) 678-27-94',
            'user_id' => '3',
        ]);
        Phone::insert([
            'phone' => '+38(066) 677-82-23',
            'user_id' => '3',
        ]);
        Phone::insert([
            'phone' => '+38(063) 987-72-53',
            'user_id' => '3',
        ]);
    }
}
