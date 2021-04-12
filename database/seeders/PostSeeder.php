<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert([
            [
                "src" => "blog-9.jpeg",
                "title" => "Just a post ",
                "category_id" => 1,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. <br> Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. <br> 
                Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. ",
                "check" => 1,
                "user_id" =>4
            ],
            [
                "src" => "blog_12.jpeg",
                "title" => "Just ",
                "category_id" => 1,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. <br> Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. <br> 
                Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. ",
                "check" => 1,
                "user_id" =>4
            ],
            [
                "src" => "blog_8.jpeg",
                "title" => "post ",
                "category_id" => 1,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. <br> Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. <br> 
                Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. ",
                "check" => 1,
                "user_id" =>4
            ],
            [
                "src" => "blog-7.jpeg",
                "title" => "6 way to become a web dev ",
                "category_id" => 2,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. <br> Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. 
                Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. <br>Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.",
                "check" => 1,
                "user_id" =>3
            ],
            [
                "src" => "blog-6.jpeg",
                "title" => "Just à Little Truelle post ",
                "category_id" => 3,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. <br>
                Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.",
                "check" => 1,
                "user_id" =>1
            ],
            [
                "src" => "blog-5.jpeg",
                "title" => "Just a Little Blog post ",
                "category_id" => 4,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. <br>
                Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.",
                "check" => 0,
                "user_id" =>2
            ],
        ]);
    }
}
