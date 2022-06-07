<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Canggih WR',
        //     'email' => 'cwr@gmail.com',
        //     'password' => bcrypt('c')
        // ]);

        // User::create([
        //     'name' => 'Calicr R',
        //     'email' => 'calrav@gmail.com',
        //     'password' => bcrypt('c')
        // ]);

        Category::create([
            'name' => 'Logo',
            'slug' => 'logo'
        ]);

        Category::create([
            'name' => 'T-shirt',
            'slug' => 'teeshirt'
        ]);

        Category::create([
            'name' => 'Facebook Cover',
            'slug' => 'cover'
        ]);


        Post::factory(50)->create();


        // Post::create([
            // 'title' => 'First Up Tshirt',
            // 'slug' => 'first-up',
            // 'excerpt' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
            // 'body' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corporis porro eaque exercitationem eum sunt eveniet, eius accusantium, omnis in ea, totam dignissimos amet eos odit natus maiores explicabo consectetur delectus.',
            // 'category_id' => 2,
            // 'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second UP',
        //     'slug' => '2nd-up',
        //     'excerpt' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
        //     'body' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corporis porro eaque exercitationem eum sunt eveniet, eius accusantium, omnis in ea, totam dignissimos amet eos odit natus maiores explicabo consectetur delectus.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Third',
        //     'slug' => '3-up',
        //     'excerpt' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
        //     'body' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corporis porro eaque exercitationem eum sunt eveniet, eius accusantium, omnis in ea, totam dignissimos amet eos odit natus maiores explicabo consectetur delectus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Fourth UP',
        //     'slug' => '4-up',
        //     'excerpt' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
        //     'body' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corporis porro eaque exercitationem eum sunt eveniet, eius accusantium, omnis in ea, totam dignissimos amet eos odit natus maiores explicabo consectetur delectus.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Fifth Up',
        //     'slug' => '5-up',
        //     'excerpt' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
        //     'body' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corporis porro eaque exercitationem eum sunt eveniet, eius accusantium, omnis in ea, totam dignissimos amet eos odit natus maiores explicabo consectetur delectus.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
