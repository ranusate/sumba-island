<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // User::create([
        //     'name' => 'Ranus Ate',
        //     'email' => 'ranusate19@gmail.com',
        //     'password' => bcrypt('asdasd')
        // ]);
        // User::create([
        //     'name' => 'Arnan Ate',
        //     'email' => 'arnan@gmail.com',
        //     'password' => bcrypt('asdasd')
        // ]);

        // Category::factory(10)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => "Web Design",
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => "Personal",
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae odit alias ipsam incidunt accusamus est! Architecto repellat unde fugiat, ipsa reprehenderit dicta sed distinctio, tempore officia exercitationem nesciunt cumque. Sit!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas cupiditate fugiat voluptas maiores natus dignissimos. Deleniti id incidunt dolorum, commodi cupiditate aliquam ipsam. Magni consectetur cum exercitationem, harum, nulla eos ab nam ipsam vitae, esse reprehenderit ipsa. Sapiente ipsa non deleniti. Vel labore, aliquam autem eum tempora, asperiores nisi eos temporibus minima magni, accusamus facilis dolorem ratione ab quam blanditiis molestiae rem nihil distinctio. Omnis quam laborum eveniet ex possimus. Aperiam sed, nemo adipisci nostrum, alias pariatur inventore, vel culpa deserunt dolorum repudiandae? Doloribus, incidunt consectetur asperiores esse deleniti maxime voluptatum at, debitis qui dolore quae? Nesciunt accusamus obcaecati pariatur ullam fugiat odio atque explicabo ad accusantium repellendus. Labore ex doloribus, commodi molestias dolores assumenda voluptate modi sint, magni debitis, vel nam fuga. Odio veritatis obcaecati nobis sed, asperiores molestiae iste, at incidunt, itaque vitae quas maiores omnis libero optio tenetur illo eos cum. Ex fuga cum similique suscipit delectus amet deleniti ut quas quam voluptatibus aspernatur consectetur, enim, quae placeat nesciunt officia. Repellendus placeat in corrupti facere magni? Quasi, consectetur. Sed esse voluptas vitae dolores eum dolorem ipsum doloremque excepturi hic. Saepe tempore culpa commodi placeat tempora, blanditiis dolores, modi rerum, perferendis error similique. Quam, autem! Quasi iure cupiditate, voluptatem ratione magni quia, labore, odio odit debitis enim dolore dolor voluptates repudiandae! Nihil, natus incidunt consequatur neque eius iusto unde est at nulla vitae quibusdam aliquam a dolore non earum saepe placeat odio omnis voluptate commodi. Cum ducimus explicabo fuga veniam reiciendis culpa! Maiores, voluptate quam. Deserunt reprehenderit dolore accusantium ducimus beatae tempore quia iure placeat, alias dolorum repellendus cumque voluptatum tenetur. A voluptatibus voluptas soluta distinctio pariatur maxime nam dolorum porro aspernatur, aperiam suscipit architecto voluptates voluptatum quod adipisci in consectetur unde assumenda repudiandae. Est cupiditate illo tenetur atque error id deserunt at provident earum eligendi obcaecati ab quasi voluptate similique in incidunt animi eos, consectetur magnam? Odit ipsum quibusdam incidunt obcaecati, magnam ex placeat sunt quia quis molestiae culpa adipisci esse vero dicta fuga. Tempora modi perspiciatis ad, eum ab repellendus! Eligendi praesentium veniam obcaecati reiciendis, accusamus sit dolor ipsum ullam, quam debitis accusantium earum aliquid nobis, voluptatem rerum quod cum quis velit exercitationem harum sunt non corrupti voluptates deserunt. Temporibus itaque accusamus est sit delectus! Est dolorum aspernatur deleniti aliquid nesciunt iusto! Obcaecati officiis animi eaque, quam cumque accusantium vitae voluptas impedit corporis quae consequuntur, quaerat inventore amet. Soluta consequatur fugit maiores vero neque minus ratione voluptatum cum, libero repellendus excepturi voluptate corporis voluptates non in ullam maxime quisquam, sunt, molestias autem temporibus aperiam ipsam corrupti nihil. Unde praesentium quo saepe consectetur quisquam deleniti, ipsa quos id exercitationem debitis, culpa sapiente maxime ullam mollitia fugit, alias magni voluptates cumque porro? Accusamus, nihil molestiae! Eveniet, vel excepturi nesciunt quas animi iure eum sed quis quae debitis illum ullam totam asperiores neque maiores, dolorem commodi. Natus voluptatum cupiditate doloribus aliquid repudiandae quas, rerum quos, assumenda accusamus, labore delectus ut nesciunt quo? Eos, illo iste dolorem eveniet ut quos, et ducimus veritatis similique hic aliquid inventore, ipsum doloribus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae odit alias ipsam incidunt accusamus est! Architecto repellat unde fugiat, ipsa reprehenderit dicta sed distinctio, tempore officia exercitationem nesciunt cumque. Sit!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas cupiditate fugiat voluptas maiores natus dignissimos. Deleniti id incidunt dolorum, commodi cupiditate aliquam ipsam. Magni consectetur cum exercitationem, harum, nulla eos ab nam ipsam vitae, esse reprehenderit ipsa. Sapiente ipsa non deleniti. Vel labore, aliquam autem eum tempora, asperiores nisi eos temporibus minima magni, accusamus facilis dolorem ratione ab quam blanditiis molestiae rem nihil distinctio. Omnis quam laborum eveniet ex possimus. Aperiam sed, nemo adipisci nostrum, alias pariatur inventore, vel culpa deserunt dolorum repudiandae? Doloribus, incidunt consectetur asperiores esse deleniti maxime voluptatum at, debitis qui dolore quae? Nesciunt accusamus obcaecati pariatur ullam fugiat odio atque explicabo ad accusantium repellendus. Labore ex doloribus, commodi molestias dolores assumenda voluptate modi sint, magni debitis, vel nam fuga. Odio veritatis obcaecati nobis sed, asperiores molestiae iste, at incidunt, itaque vitae quas maiores omnis libero optio tenetur illo eos cum. Ex fuga cum similique suscipit delectus amet deleniti ut quas quam voluptatibus aspernatur consectetur, enim, quae placeat nesciunt officia. Repellendus placeat in corrupti facere magni? Quasi, consectetur. Sed esse voluptas vitae dolores eum dolorem ipsum doloremque excepturi hic. Saepe tempore culpa commodi placeat tempora, blanditiis dolores, modi rerum, perferendis error similique. Quam, autem! Quasi iure cupiditate, voluptatem ratione magni quia, labore, odio odit debitis enim dolore dolor voluptates repudiandae! Nihil, natus incidunt consequatur neque eius iusto unde est at nulla vitae quibusdam aliquam a dolore non earum saepe placeat odio omnis voluptate commodi. Cum ducimus explicabo fuga veniam reiciendis culpa! Maiores, voluptate quam. Deserunt reprehenderit dolore accusantium ducimus beatae tempore quia iure placeat, alias dolorum repellendus cumque voluptatum tenetur. A voluptatibus voluptas soluta distinctio pariatur maxime nam dolorum porro aspernatur, aperiam suscipit architecto voluptates voluptatum quod adipisci in consectetur unde assumenda repudiandae. Est cupiditate illo tenetur atque error id deserunt at provident earum eligendi obcaecati ab quasi voluptate similique in incidunt animi eos, consectetur magnam? Odit ipsum quibusdam incidunt obcaecati, magnam ex placeat sunt quia quis molestiae culpa adipisci esse vero dicta fuga. Tempora modi perspiciatis ad, eum ab repellendus! Eligendi praesentium veniam obcaecati reiciendis, accusamus sit dolor ipsum ullam, quam debitis accusantium earum aliquid nobis, voluptatem rerum quod cum quis velit exercitationem harum sunt non corrupti voluptates deserunt. Temporibus itaque accusamus est sit delectus! Est dolorum aspernatur deleniti aliquid nesciunt iusto! Obcaecati officiis animi eaque, quam cumque accusantium vitae voluptas impedit corporis quae consequuntur, quaerat inventore amet. Soluta consequatur fugit maiores vero neque minus ratione voluptatum cum, libero repellendus excepturi voluptate corporis voluptates non in ullam maxime quisquam, sunt, molestias autem temporibus aperiam ipsam corrupti nihil. Unde praesentium quo saepe consectetur quisquam deleniti, ipsa quos id exercitationem debitis, culpa sapiente maxime ullam mollitia fugit, alias magni voluptates cumque porro? Accusamus, nihil molestiae! Eveniet, vel excepturi nesciunt quas animi iure eum sed quis quae debitis illum ullam totam asperiores neque maiores, dolorem commodi. Natus voluptatum cupiditate doloribus aliquid repudiandae quas, rerum quos, assumenda accusamus, labore delectus ut nesciunt quo? Eos, illo iste dolorem eveniet ut quos, et ducimus veritatis similique hic aliquid inventore, ipsum doloribus.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae odit alias ipsam incidunt accusamus est! Architecto repellat unde fugiat, ipsa reprehenderit dicta sed distinctio, tempore officia exercitationem nesciunt cumque. Sit!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quas cupiditate fugiat voluptas maiores natus dignissimos. Deleniti id incidunt dolorum, commodi cupiditate aliquam ipsam. Magni consectetur cum exercitationem, harum, nulla eos ab nam ipsam vitae, esse reprehenderit ipsa. Sapiente ipsa non deleniti. Vel labore, aliquam autem eum tempora, asperiores nisi eos temporibus minima magni, accusamus facilis dolorem ratione ab quam blanditiis molestiae rem nihil distinctio. Omnis quam laborum eveniet ex possimus. Aperiam sed, nemo adipisci nostrum, alias pariatur inventore, vel culpa deserunt dolorum repudiandae? Doloribus, incidunt consectetur asperiores esse deleniti maxime voluptatum at, debitis qui dolore quae? Nesciunt accusamus obcaecati pariatur ullam fugiat odio atque explicabo ad accusantium repellendus. Labore ex doloribus, commodi molestias dolores assumenda voluptate modi sint, magni debitis, vel nam fuga. Odio veritatis obcaecati nobis sed, asperiores molestiae iste, at incidunt, itaque vitae quas maiores omnis libero optio tenetur illo eos cum. Ex fuga cum similique suscipit delectus amet deleniti ut quas quam voluptatibus aspernatur consectetur, enim, quae placeat nesciunt officia. Repellendus placeat in corrupti facere magni? Quasi, consectetur. Sed esse voluptas vitae dolores eum dolorem ipsum doloremque excepturi hic. Saepe tempore culpa commodi placeat tempora, blanditiis dolores, modi rerum, perferendis error similique. Quam, autem! Quasi iure cupiditate, voluptatem ratione magni quia, labore, odio odit debitis enim dolore dolor voluptates repudiandae! Nihil, natus incidunt consequatur neque eius iusto unde est at nulla vitae quibusdam aliquam a dolore non earum saepe placeat odio omnis voluptate commodi. Cum ducimus explicabo fuga veniam reiciendis culpa! Maiores, voluptate quam. Deserunt reprehenderit dolore accusantium ducimus beatae tempore quia iure placeat, alias dolorum repellendus cumque voluptatum tenetur. A voluptatibus voluptas soluta distinctio pariatur maxime nam dolorum porro aspernatur, aperiam suscipit architecto voluptates voluptatum quod adipisci in consectetur unde assumenda repudiandae. Est cupiditate illo tenetur atque error id deserunt at provident earum eligendi obcaecati ab quasi voluptate similique in incidunt animi eos, consectetur magnam? Odit ipsum quibusdam incidunt obcaecati, magnam ex placeat sunt quia quis molestiae culpa adipisci esse vero dicta fuga. Tempora modi perspiciatis ad, eum ab repellendus! Eligendi praesentium veniam obcaecati reiciendis, accusamus sit dolor ipsum ullam, quam debitis accusantium earum aliquid nobis, voluptatem rerum quod cum quis velit exercitationem harum sunt non corrupti voluptates deserunt. Temporibus itaque accusamus est sit delectus! Est dolorum aspernatur deleniti aliquid nesciunt iusto! Obcaecati officiis animi eaque, quam cumque accusantium vitae voluptas impedit corporis quae consequuntur, quaerat inventore amet. Soluta consequatur fugit maiores vero neque minus ratione voluptatum cum, libero repellendus excepturi voluptate corporis voluptates non in ullam maxime quisquam, sunt, molestias autem temporibus aperiam ipsam corrupti nihil. Unde praesentium quo saepe consectetur quisquam deleniti, ipsa quos id exercitationem debitis, culpa sapiente maxime ullam mollitia fugit, alias magni voluptates cumque porro? Accusamus, nihil molestiae! Eveniet, vel excepturi nesciunt quas animi iure eum sed quis quae debitis illum ullam totam asperiores neque maiores, dolorem commodi. Natus voluptatum cupiditate doloribus aliquid repudiandae quas, rerum quos, assumenda accusamus, labore delectus ut nesciunt quo? Eos, illo iste dolorem eveniet ut quos, et ducimus veritatis similique hic aliquid inventore, ipsum doloribus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
