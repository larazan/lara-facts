<?php

namespace Database\Seeders;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name' => 'Love', 'slug' => 'love', 'status' => 'active', 'created_at' => Carbon::now()],
            ['name' => 'War', 'slug' => 'war', 'status' => 'active', 'created_at' => Carbon::now()],
            ['name' => 'Rich', 'slug' => 'rich', 'status' => 'active', 'created_at' => Carbon::now()],
            ['name' => 'Happy', 'slug' => 'happy', 'status' => 'active', 'created_at' => Carbon::now()],
            ['name' => 'Emotion', 'slug' => 'emotion', 'status' => 'active', 'created_at' => Carbon::now()],
            ['name' => 'Work', 'slug' => 'work', 'status' => 'active', 'created_at' => Carbon::now()],
            ['name' => 'People', 'slug' => 'people', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Life', 'slug' => 'life', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Time', 'slug' => 'time', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Human', 'slug' => 'human', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Mind', 'slug' => 'mind', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Heart', 'slug' => 'heart', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Fear', 'slug' => 'fear', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Act', 'slug' => 'act', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'World', 'slug' => 'world', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Suffer', 'slug' => 'suffer', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Respect', 'slug' => 'respect', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Good', 'slug' => 'good', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Bad', 'slug' => 'bad', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Patience', 'slug' => 'patience', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'History', 'slug' => 'history', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Change', 'slug' => 'change', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Power', 'slug' => 'power', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Moment', 'slug' => 'moment', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Choices', 'slug' => 'Choices', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Way', 'slug' => 'way', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Support', 'slug' => 'support', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Peace', 'slug' => 'peace', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Active', 'slug' => 'active', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Family', 'slug' => 'family', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Faith', 'slug' => 'faith', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Great', 'slug' => 'great', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Fight', 'slug' => 'fight', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Development', 'slug' => 'development', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Growth', 'slug' => 'growth', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Poverty', 'slug' => 'poverty', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Need', 'slug' => 'need', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Help', 'slug' => 'help', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Fun', 'slug' => 'fun', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Hope', 'slug' => 'hope', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Focus', 'slug' => 'focus', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Goals', 'slug' => 'goals', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Spirit', 'slug' => 'spirit', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Believe', 'slug' => 'believe', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Live', 'slug' => 'live', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Harmony', 'slug' => 'harmony', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Free', 'slug' => 'free', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Will', 'slug' => 'will', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Result', 'slug' => 'result', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Solution', 'slug' => 'solution', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Grow', 'slug' => 'grow', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Lost', 'slug' => 'lost', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Future', 'slug' => 'future', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Happens', 'slug' => 'happens', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Crazy', 'slug' => 'crazy', 'status' => 'active', 'created_at' => Carbon::now()], 
            ['name' => 'Mystery', 'slug' => 'mystery', 'status' => 'active', 'created_at' => Carbon::now()], 
        ]);
    }
}
