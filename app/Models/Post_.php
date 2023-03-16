<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $blog_posts = [
      [
         "title" => "Title first post",
         "slug" => "title-first-posts",
         "author" => "Mbarep",
         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas nisi, nesciunt nobis saepe possimus dolores modi quidem ab recusandae asperiores magni nemo neque. Reiciendis facere, ea rem tenetur tempore soluta molestiae non sit odit itaque voluptatem possimus commodi aliquid dolor natus dignissimos, eum provident, amet fugiat beatae inventore? Autem eos quae asperiores odio consequuntur delectus ea sequi eligendi, debitis et."
      ],
      [
         "title" => "Title second post",
         "slug" => "title-second-posts",
         "author" => "Abigail",
         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, sint at numquam tenetur dolores ipsam a voluptatum officia itaque, tempora dignissimos in porro ducimus, voluptate fuga totam inventore neque vero hic. Veritatis saepe tenetur dignissimos fugit voluptas placeat modi beatae pariatur voluptatem tempora perspiciatis cumque sit velit iusto perferendis fugiat dicta alias exercitationem impedit quam provident, nisi, numquam eos neque. Ad facere libero placeat quidem."
      ],
   ];

   public static function all()
   {
      return collect(self::$blog_posts);
   }

   public static function find($slug)
   {
      $posts = static::all();
      return $posts->firstWhere('slug', $slug);
   }
}
