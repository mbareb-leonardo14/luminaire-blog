<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
   {
   /**
    * Seed the application's database.
    */
   public function run(): void
      {

      // \App\Models\User::factory()->create([
      //     'name' => 'Test User',
      //     'email' => 'test@example.com',
      // ]);

      //User::create([
      //   'name' => 'Mbarep',
      //   'email' => 'mbarep@gmail.com',
      //   'password' => bcrypt('12345')
      //]);

      //User::create([
      //   'name' => 'Rena',
      //   'email' => 'rena@gmail.com',
      //   'password' => bcrypt('12345')
      //]);

      User::create([
         'name' => 'Mbarep Leonardo',
         'username' => 'Mbarep',
         'email' => 'mbareb@gmail.com',
         'password' => bcrypt('password'),
         'is_admin' => 1
      ]);

      User::factory(4)->create();

      Category::create([
         'name' => 'Entertainment',
         'slug' => 'entertainment'
      ]);

      Category::create([
         'name' => 'World',
         'slug' => 'world'
      ]);

      Category::create([
         'name' => 'Art',
         'slug' => 'art'
      ]);

      Category::create([
         'name' => 'Sport',
         'slug' => 'sport'
      ]);

      Category::create([
         'name' => 'Vintage',
         'slug' => 'vintage'
      ]);

      Category::create([
         'name' => 'Music',
         'slug' => 'music'
      ]);

      Post::factory(45)->create();

      //Post::create([
      //   'title' => 'First Title',
      //   'slug' => 'first-title',
      //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic praesentium laboriosam veritatis omnis repellat quod quaerat. Quam quasi quaerat dolorem?',
      //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tenetur ratione accusantium ea, veniam hic dolores. Animi harum quod incidunt deserunt. Accusamus nihil rerum et inventore cupiditate at. Nesciunt dicta dolores hic quae. Dolorem consequatur velit ipsa amet, animi officiis aperiam quidem deserunt! Facilis in nihil omnis quas assumenda vel quasi, sed labore impedit cum nostrum modi placeat hic ab eos quaerat molestias. Error corrupti fuga repellat vitae? Odio in cupiditate dolorem optio omnis amet fugiat quas quae obcaecati a consequatur accusamus animi, vitae dolor vel consequuntur debitis sed, architecto fugit quod enim! Quidem deserunt itaque est quasi non iure?',
      //   'category_id' => 1,
      //   'user_id' => 1
      //]);

      //Post::create([
      //   'title' => 'Second Title',
      //   'slug' => 'second-title',
      //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic praesentium laboriosam veritatis omnis repellat quod quaerat. Quam quasi quaerat dolorem?',
      //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tenetur ratione accusantium ea, veniam hic dolores. Animi harum quod incidunt deserunt. Accusamus nihil rerum et inventore cupiditate at. Nesciunt dicta dolores hic quae. Dolorem consequatur velit ipsa amet, animi officiis aperiam quidem deserunt! Facilis in nihil omnis quas assumenda vel quasi, sed labore impedit cum nostrum modi placeat hic ab eos quaerat molestias. Error corrupti fuga repellat vitae? Odio in cupiditate dolorem optio omnis amet fugiat quas quae obcaecati a consequatur accusamus animi, vitae dolor vel consequuntur debitis sed, architecto fugit quod enim! Quidem deserunt itaque est quasi non iure?',
      //   'category_id' => 3,
      //   'user_id' => 1
      //]);

      //Post::create([
      //   'title' => 'Third Title',
      //   'slug' => 'third-title',
      //   'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic praesentium laboriosam veritatis omnis repellat quod quaerat. Quam quasi quaerat dolorem?',
      //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tenetur ratione accusantium ea, veniam hic dolores. Animi harum quod incidunt deserunt. Accusamus nihil rerum et inventore cupiditate at. Nesciunt dicta dolores hic quae. Dolorem consequatur velit ipsa amet, animi officiis aperiam quidem deserunt! Facilis in nihil omnis quas assumenda vel quasi, sed labore impedit cum nostrum modi placeat hic ab eos quaerat molestias. Error corrupti fuga repellat vitae? Odio in cupiditate dolorem optio omnis amet fugiat quas quae obcaecati a consequatur accusamus animi, vitae dolor vel consequuntur debitis sed, architecto fugit quod enim! Quidem deserunt itaque est quasi non iure?',
      //   'category_id' => 1,
      //   'user_id' => 2
      //]);
      }
   }
