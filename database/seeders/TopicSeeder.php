<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Topic;
use App\Models\Post;
use Hash;
use Str;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name'               => 'Muhammad',
            'email'              => 'muhammad@web-app.com',
            'bio'                => 'profile',
            'email_verified_at'  => now(),
            'gender'             => 'male',
            'type'               => 'user',
            'date_of_birth'      => now(),
            'active_since'       => now(),
            'status'             => 1,
            'password'           => Hash::make('password'),
            'remember_token'     => Str::random(10),
        ]);
        $topic = Topic::create([
            'user_id' => $user->id,
            'category_id' =>1,
            'Title' => 'Mobile Security',
            'content' => 'Mobile security is the protection of smartphones, tablets, laptops and other portable computing devices, 
            and the networks they connect to, from threats and vulnerabilities associated with wireless computing.'
        ]);
        $post = Post::create([
            'topic_id' => $topic->id,
            'user_id' => $user->id,
            'content' => 'Hello World!'
        ]);
    }
}
