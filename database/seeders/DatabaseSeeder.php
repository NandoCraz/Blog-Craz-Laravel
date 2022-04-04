<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Ronin Craz',
            'username' => 'Calped Baldy',
            'email' => 'ronincraz@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Zulkarnain Hasan',
        //     'email' => 'zulkarhasan@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'First Title',
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse, repudiandae velit, temporibus itaque aut fugit sint laborum ab soluta non reprehenderit eos est unde facere deleniti, nisi voluptates aliquam? Maiores voluptates iste veritatis ratione illo, velit autem quaerat! Cupiditate, natus cum? Officia deserunt nostrum natus, nulla tempora repudiandae id placeat fugit recusandae et blanditiis distinctio minima debitis inventore, dolorem, vero possimus ducimus? Explicabo harum dicta quo, alias tempora neque delectus consequuntur, mollitia suscipit, veritatis fuga itaque commodi eveniet sint officiis? Voluptatem ducimus voluptatibus cum ex.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second Title',
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse, repudiandae velit, temporibus itaque aut fugit sint laborum ab soluta non reprehenderit eos est unde facere deleniti, nisi voluptates aliquam? Maiores voluptates iste veritatis ratione illo, velit autem quaerat! Cupiditate, natus cum? Officia deserunt nostrum natus, nulla tempora repudiandae id placeat fugit recusandae et blanditiis distinctio minima debitis inventore, dolorem, vero possimus ducimus? Explicabo harum dicta quo, alias tempora neque delectus consequuntur, mollitia suscipit, veritatis fuga itaque commodi eveniet sint officiis? Voluptatem ducimus voluptatibus cum ex.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Third Title',
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse, repudiandae velit, temporibus itaque aut fugit sint laborum ab soluta non reprehenderit eos est unde facere deleniti, nisi voluptates aliquam? Maiores voluptates iste veritatis ratione illo, velit autem quaerat! Cupiditate, natus cum? Officia deserunt nostrum natus, nulla tempora repudiandae id placeat fugit recusandae et blanditiis distinctio minima debitis inventore, dolorem, vero possimus ducimus? Explicabo harum dicta quo, alias tempora neque delectus consequuntur, mollitia suscipit, veritatis fuga itaque commodi eveniet sint officiis? Voluptatem ducimus voluptatibus cum ex.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Fourth Title',
        //     'slug' => 'fourth-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quae non et tempora, tenetur vero sapiente eius! Hic commodi dolorum autem sapiente earum esse, repudiandae velit, temporibus itaque aut fugit sint laborum ab soluta non reprehenderit eos est unde facere deleniti, nisi voluptates aliquam? Maiores voluptates iste veritatis ratione illo, velit autem quaerat! Cupiditate, natus cum? Officia deserunt nostrum natus, nulla tempora repudiandae id placeat fugit recusandae et blanditiis distinctio minima debitis inventore, dolorem, vero possimus ducimus? Explicabo harum dicta quo, alias tempora neque delectus consequuntur, mollitia suscipit, veritatis fuga itaque commodi eveniet sint officiis? Voluptatem ducimus voluptatibus cum ex.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
