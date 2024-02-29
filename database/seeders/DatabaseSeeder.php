<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();

        User::factory(5)->create();

        $userIds = User::pluck('id')->toArray();

        Store::factory(10)->create([
            'user_id' => function () use ($userIds, $faker) {
                return $faker->randomElement($userIds);
            }
        ])->each(function ($store) use ($faker) {
            $store->products()->saveMany(Product::factory(3)->make([
                'title' => $faker->word,
                'store_id' => $store->id,
            ]));
        });
    }
}
