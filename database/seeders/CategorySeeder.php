<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Animals',
                'slug' => 'animals',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'History',
                'slug' => 'history',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Geography',
                'slug' => 'geography',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Plants',
                'slug' => 'plants',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Kids',
                'slug' => 'kids',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Human',
                'slug' => 'human',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Food',
                'slug' => 'food',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Gaming',
                'slug' => 'gaming',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Health',
                'slug' => 'health',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Laws',
                'slug' => 'laws',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Movies',
                'slug' => 'movies',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Music',
                'slug' => 'music',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Nature',
                'slug' => 'nature',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'People',
                'slug' => 'people',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Places',
                'slug' => 'places',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Science',
                'slug' => 'science',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Tech',
                'slug' => 'tech',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Weird',
                'slug' => 'weird',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Celebrity',
                'slug' => 'celebrity',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Category::insert($data);
    }
}
