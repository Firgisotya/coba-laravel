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
       

        User::create([
            'name' => 'Firgi',
            'username' => 'firgi',
            'email' => 'firgi@gmail.com',
            'password' =>bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Sotya',
        //     'email' => 'sotya@gmail.com',
        //     'password' =>bcrypt('123')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at. Sed dicta placeat porro omnis eos libero nihil ut quibusdam nam, ullam ad laborum adipisci quam unde officia perspiciatis blanditiis harum, commodi quas dolor aliquam hic alias? Est temporibus, delectus excepturi, corporis vel tempora veniam recusandae, facere autem incidunt nisi ut exercitationem a iste amet deserunt. Tempore, perferendis? Impedit quia voluptas molestias debitis nam id, incidunt laborum praesentium atque. Inventore molestias non laborum. Numquam nobis voluptates, reprehenderit cum porro quis quasi, velit itaque, voluptate provident assumenda ea vero facilis. Aliquid mollitia iusto sed laborum amet commodi, nam ipsa laboriosam provident.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at. Sed dicta placeat porro omnis eos libero nihil ut quibusdam nam, ullam ad laborum adipisci quam unde officia perspiciatis blanditiis harum, commodi quas dolor aliquam hic alias? Est temporibus, delectus excepturi, corporis vel tempora veniam recusandae, facere autem incidunt nisi ut exercitationem a iste amet deserunt. Tempore, perferendis? Impedit quia voluptas molestias debitis nam id, incidunt laborum praesentium atque. Inventore molestias non laborum. Numquam nobis voluptates, reprehenderit cum porro quis quasi, velit itaque, voluptate provident assumenda ea vero facilis. Aliquid mollitia iusto sed laborum amet commodi, nam ipsa laboriosam provident.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at. Sed dicta placeat porro omnis eos libero nihil ut quibusdam nam, ullam ad laborum adipisci quam unde officia perspiciatis blanditiis harum, commodi quas dolor aliquam hic alias? Est temporibus, delectus excepturi, corporis vel tempora veniam recusandae, facere autem incidunt nisi ut exercitationem a iste amet deserunt. Tempore, perferendis? Impedit quia voluptas molestias debitis nam id, incidunt laborum praesentium atque. Inventore molestias non laborum. Numquam nobis voluptates, reprehenderit cum porro quis quasi, velit itaque, voluptate provident assumenda ea vero facilis. Aliquid mollitia iusto sed laborum amet commodi, nam ipsa laboriosam provident.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, at. Sed dicta placeat porro omnis eos libero nihil ut quibusdam nam, ullam ad laborum adipisci quam unde officia perspiciatis blanditiis harum, commodi quas dolor aliquam hic alias? Est temporibus, delectus excepturi, corporis vel tempora veniam recusandae, facere autem incidunt nisi ut exercitationem a iste amet deserunt. Tempore, perferendis? Impedit quia voluptas molestias debitis nam id, incidunt laborum praesentium atque. Inventore molestias non laborum. Numquam nobis voluptates, reprehenderit cum porro quis quasi, velit itaque, voluptate provident assumenda ea vero facilis. Aliquid mollitia iusto sed laborum amet commodi, nam ipsa laboriosam provident.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
