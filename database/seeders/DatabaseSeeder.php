<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Muhammad Fazril',
        //     'email' => '203040068@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Alia Azzahra',
        //     'email' => 'aliaazzahra12@gmail.com',
        //     'password' => bcrypt('112233')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe veritatis animi facilis commodi facere nam quisquam nobis ab repudiandae</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe veritatis animi facilis commodi facere nam quisquam nobis ab repudiandae</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe veritatis animi facilis commodi facere nam quisquam nobis ab repudiandae</p>',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe veritatis animi facilis commodi facere nam quisquam nobis ab repudiandae</p>',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}