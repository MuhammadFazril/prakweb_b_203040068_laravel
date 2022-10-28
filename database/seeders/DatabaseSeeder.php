<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use\App\Models\User;
use\App\Models\Category;
use\App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Fazril',
            'email' => '203040068@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Alia Azzahra',
            'email' => '203040068@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'Web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, maiores sunt expedita tempore perferendis quisquam cum quam odit. Adipisci cum vel eius excepturi illum non deserunt incidunt soluta quisquam suscipit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae eius aliquid quam unde omnis atque numquam ducimus distinctio totam facere? Eligendi id maiores cumque harum reiciendis ab vel est ea doloribus a. Vel eligendi sed iure laboriosam numquam laudantium vero sapiente excepturi doloremque eveniet! Assumenda eaque laborum cupiditate vitae amet aperiam mollitia aliquid debitis? Numquam ea dolor tenetur perspiciatis quas eveniet architecto fugit ducimus doloribus, ab, provident itaque quibusdam, adipisci et porro? Ut, fugiat. Dolorem eaque repudiandae atque voluptate reprehenderit.'
            'category_id' => 1,
            'user_id' => 1
        ]);


        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, maiores sunt expedita tempore perferendis quisquam cum quam odit. Adipisci cum vel eius excepturi illum non deserunt incidunt soluta quisquam suscipit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae eius aliquid quam unde omnis atque numquam ducimus distinctio totam facere? Eligendi id maiores cumque harum reiciendis ab vel est ea doloribus a. Vel eligendi sed iure laboriosam numquam laudantium vero sapiente excepturi doloremque eveniet! Assumenda eaque laborum cupiditate vitae amet aperiam mollitia aliquid debitis? Numquam ea dolor tenetur perspiciatis quas eveniet architecto fugit ducimus doloribus, ab, provident itaque quibusdam, adipisci et porro? Ut, fugiat. Dolorem eaque repudiandae atque voluptate reprehenderit.'
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'Judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, maiores sunt expedita tempore perferendis quisquam cum quam odit. Adipisci cum vel eius excepturi illum non deserunt incidunt soluta quisquam suscipit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae eius aliquid quam unde omnis atque numquam ducimus distinctio totam facere? Eligendi id maiores cumque harum reiciendis ab vel est ea doloribus a. Vel eligendi sed iure laboriosam numquam laudantium vero sapiente excepturi doloremque eveniet! Assumenda eaque laborum cupiditate vitae amet aperiam mollitia aliquid debitis? Numquam ea dolor tenetur perspiciatis quas eveniet architecto fugit ducimus doloribus, ab, provident itaque quibusdam, adipisci et porro? Ut, fugiat. Dolorem eaque repudiandae atque voluptate reprehenderit.'
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'Judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, maiores sunt expedita tempore perferendis quisquam cum quam odit. Adipisci cum vel eius excepturi illum non deserunt incidunt soluta quisquam suscipit?',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae eius aliquid quam unde omnis atque numquam ducimus distinctio totam facere? Eligendi id maiores cumque harum reiciendis ab vel est ea doloribus a. Vel eligendi sed iure laboriosam numquam laudantium vero sapiente excepturi doloremque eveniet! Assumenda eaque laborum cupiditate vitae amet aperiam mollitia aliquid debitis? Numquam ea dolor tenetur perspiciatis quas eveniet architecto fugit ducimus doloribus, ab, provident itaque quibusdam, adipisci et porro? Ut, fugiat. Dolorem eaque repudiandae atque voluptate reprehenderit.'
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
