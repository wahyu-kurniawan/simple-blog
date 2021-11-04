<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
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
        User::factory(3)->create();
        Post::factory(15)->create();

        // User::create([
        //     'name' => 'Wahyu Kurniawan',
        //     'email' => 'wahyu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'wawan',
        //     'email' => 'wawan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora animi id, obcaecati perspiciatis hic non assumenda minima harum, nulla accusantium itaque, officia possimus eum voluptatibus facilis!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora animi id, obcaecati perspiciatis hic non assumenda minima harum, nulla accusantium itaque, officia possimus eum voluptatibus facilis! Aliquam velit est recusandae quis magnam, corrupti accusamus quas magni aperiam consequatur similique labore id laudantium hic ipsam. Veniam, consequuntur ea inventore adipisci laborum incidunt magni asperiores iste quibusdam fugit provident quis repellat ullam voluptatum animi repudiandae vitae nobis magnam, maiores labore! Voluptates praesentium repellat ad? Accusamus quos voluptatem at dolorem, quasi perspiciatis asperiores quo mollitia tempore exercitationem! Aperiam vero praesentium ipsam, tempora consequuntur, temporibus, iusto nesciunt possimus modi vitae eaque molestias incidunt voluptas?'
        // ]);
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora animi id, obcaecati perspiciatis hic non assumenda minima harum, nulla accusantium itaque, officia possimus eum voluptatibus facilis!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora animi id, obcaecati perspiciatis hic non assumenda minima harum, nulla accusantium itaque, officia possimus eum voluptatibus facilis! Aliquam velit est recusandae quis magnam, corrupti accusamus quas magni aperiam consequatur similique labore id laudantium hic ipsam. Veniam, consequuntur ea inventore adipisci laborum incidunt magni asperiores iste quibusdam fugit provident quis repellat ullam voluptatum animi repudiandae vitae nobis magnam, maiores labore! Voluptates praesentium repellat ad? Accusamus quos voluptatem at dolorem, quasi perspiciatis asperiores quo mollitia tempore exercitationem! Aperiam vero praesentium ipsam, tempora consequuntur, temporibus, iusto nesciunt possimus modi vitae eaque molestias incidunt voluptas?'
        // ]);
        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora animi id, obcaecati perspiciatis hic non assumenda minima harum, nulla accusantium itaque, officia possimus eum voluptatibus facilis!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora animi id, obcaecati perspiciatis hic non assumenda minima harum, nulla accusantium itaque, officia possimus eum voluptatibus facilis! Aliquam velit est recusandae quis magnam, corrupti accusamus quas magni aperiam consequatur similique labore id laudantium hic ipsam. Veniam, consequuntur ea inventore adipisci laborum incidunt magni asperiores iste quibusdam fugit provident quis repellat ullam voluptatum animi repudiandae vitae nobis magnam, maiores labore! Voluptates praesentium repellat ad? Accusamus quos voluptatem at dolorem, quasi perspiciatis asperiores quo mollitia tempore exercitationem! Aperiam vero praesentium ipsam, tempora consequuntur, temporibus, iusto nesciunt possimus modi vitae eaque molestias incidunt voluptas?'
        // ]);
    }
}
