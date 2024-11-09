<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\food;
use Carbon\Carbon;



class foodseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        food::factory(6)->create([
            'created_at' => Carbon::today(),
            ]);
            
            // Fake data for yesterday
            food::factory(6)->create([
            'created_at' => Carbon::yesterday(),
            ]);
            
            // Fake data for this week
            food::factory(6)->create([
            'created_at' => Carbon::now()->startOfWeek(),
            ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
            $post->save();
            });
            
            // Fake data for last week
            food::factory(6)->create([
            'created_at' => Carbon::now()->subWeek()->startOfWeek(),
            ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
            $post->save();
            });
            
            // Fake data for this month
            food::factory(6)->create([
                'created_at' => Carbon::now()->startOfMonth(),
                ])->each(function ($post) {
                $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
                $post->save();
                });
                
                // Fake data for last month
                food::factory(6)->create([
                'created_at' => Carbon::now()->subMonth()->startOfMonth(),
                ])->each(function ($post) {
                $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
                $post->save();
                });
                
                // Fake data for this year
                food::factory(6)->create([
                'created_at' => Carbon::now()->startOfYear(),
                ])->each(function ($post) {
                $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
                $post->save();
                });
            
                
            // Fake data for last year
            food::factory(6)->create([
            'created_at' => Carbon::now()->subYear()->startOfYear(),
            ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
            $post->save();
            });
    }
}
