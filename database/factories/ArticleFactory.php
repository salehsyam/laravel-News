<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(4,true);
        $filePath = public_path('public/uploads/news.png');
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->sentence(10),
            'content' => $this->faker->sentence(200 ,true),
            'category_id' => Category::all()->random()->id,
            'status' => $this->faker->randomElement(['draft','published']),
            'features' => $this->faker->randomElement(['article','slider-top','trendNews','mostPopular','slider-footer']),
            'user_id' =>User::all()->random()->id
        ];
    }
}
