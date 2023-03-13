<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'subject_id' => \App\Models\Subject::all()->random()->id,
            'group_id' => \App\Models\Group::all()->random()->id,
            'is_published' => $this->faker->boolean,
        ];
    }
}
