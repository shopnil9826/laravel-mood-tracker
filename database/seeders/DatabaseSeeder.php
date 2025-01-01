<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Entry;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(MoodSeeder::class);

        // create an array of random unique dates in the format y-m-d
        $randomDates = [];
        while (count($randomDates) < 15) {
            $date = Carbon::today()->subDays(rand(0, 31))->format('Y-m-d');
            if (!in_array($date, $randomDates))
                array_push($randomDates, $date);
        }

        foreach ($randomDates as $date) {
            Entry::factory()->create([
                'date' => $date
            ]);
        }
    }
}
