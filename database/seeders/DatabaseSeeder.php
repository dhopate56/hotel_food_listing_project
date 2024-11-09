<?php

namespace Database\Seeders;

use App\Models\hotel;
use App\Models\food;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            foodSeeder::class
          ]);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
// // Fake data for today- hotel model
// hotel::factory(6)->create([
// 'created_at' => Carbon::today(),
// ]);

// // Fake data for yesterday
// hotel::factory(6)->create([
// 'created_at' => Carbon::yesterday(),
// ]);

// // Fake data for this week
// hotel::factory(6)->create([
// 'created_at' => Carbon::now()->startOfWeek(),
// ])->each(function ($post) {
// $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
// $post->save();
// });

// // Fake data for last week
// hotel::factory(6)->create([
// 'created_at' => Carbon::now()->subWeek()->startOfWeek(),
// ])->each(function ($post) {
// $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
// $post->save();
// });

// // Fake data for this month
// hotel::factory(6)->create([
//     'created_at' => Carbon::now()->startOfMonth(),
//     ])->each(function ($post) {
//     $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
//     $post->save();
//     });
    
//     // Fake data for last month
//     hotel::factory(6)->create([
//     'created_at' => Carbon::now()->subMonth()->startOfMonth(),
//     ])->each(function ($post) {
//     $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
//     $post->save();
//     });
    
//     // Fake data for this year
//     hotel::factory(6)->create([
//     'created_at' => Carbon::now()->startOfYear(),
//     ])->each(function ($post) {
//     $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
//     $post->save();
//     });

    
// // Fake data for last year
// hotel::factory(6)->create([
// 'created_at' => Carbon::now()->subYear()->startOfYear(),
// ])->each(function ($post) {
// $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
// $post->save();
// });



    }
}
