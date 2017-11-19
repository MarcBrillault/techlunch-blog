<?php

use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbUsers = rand(3, 10);
        factory(\App\User::class, $nbUsers)
            ->create()
            ->each(function ($user) {
                $nbPosts = rand(0, 5);
                for ($i = 0; $i < $nbPosts; $i++) {
                    $user->posts()->save(factory(\App\Post::class)->make());
                }
            });
    }
}
