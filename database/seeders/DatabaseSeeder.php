<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;

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

        Blog::factory(20)->create();
        // blog::create([
        //     'category_id' => '1', 
        //     'user_id' => '1',
        //     'title' => 'Judul Blog Pertama', 
        //     'slug' => 'judul-blog-pertama', 
        //     'excerpt' => 'lorem testing blog pertama',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque incidunt est veniam voluptatibus ad ex nulla totam provident soluta, reprehenderit quisquam illum quibusdam nobis sed sequi animi eos praesentium culpa dolores repudiandae. Inventore obcaecati consequuntur corporis sed voluptates suscipit tempore ipsum minus laborum assumenda, iste quo, rem quae sit accusantium laudantium consectetur aliquid! Corrupti nisi exercitationem quasi reprehenderit, eveniet suscipit. Perferendis nostrum harum repellendus, quas quae ipsum dolorum consectetur magnam repellat optio minus omnis saepe animi quidem sequi ex nihil laboriosam laudantium non? Tempora quia animi id distinctio praesentium eius debitis laboriosam laudantium natus aperiam quam, minus, pariatur, quo enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni neque fugit ipsam blanditiis sit aut dolores non, maxime modi exercitationem aliquid voluptatibus optio eos tempora unde voluptatem ut doloremque facere illo ipsum velit assumenda. Debitis ipsam blanditiis, porro amet aut repudiandae id iusto quidem nulla laborum esse ut quisquam doloremque molestiae. Rem officiis vitae porro mollitia aspernatur quo aut odio nesciunt a sequi atque nobis, veniam iste excepturi sint corrupti, laborum quibusdam! Vero magnam natus totam quidem atque tempore aliquam incidunt eveniet hic dignissimos, quos ut? Nisi nobis placeat maiores eligendi qui doloremque. Sint iste natus debitis repellendus voluptates vitae, odio blanditiis esse doloribus sapiente tempore, ad veritatis delectus porro quibusdam. Alias magni dolorem doloribus officia in minus quidem, eveniet amet fuga animi quas, doloremque modi numquam natus voluptas voluptates eaque cumque. Incidunt iusto exercitationem tempore, labore perspiciatis voluptate, quasi dolor pariatur eligendi veritatis perferendis, quod id ut facere nemo harum reprehenderit commodi fugiat eaque? Obcaecati, ratione vero! Aliquam maxime odit sed culpa a, excepturi quidem non ipsam, officia perferendis iste laudantium accusamus ab nulla facilis optio quasi eaque eligendi tenetur nostrum exercitationem rem. Fuga, dignissimos accusamus! Obcaecati nesciunt quam quasi non, magnam itaque quis exercitationem aspernatur libero doloribus veniam?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloribus est autem nesciunt praesentium perspiciatis ullam aliquam libero nisi voluptates numquam inventore itaque quae dolores officia, asperiores id labore assumenda porro molestias, magnam neque tempora atque placeat! Eveniet ipsum rem, praesentium mollitia dolorum quos aliquam incidunt cupiditate laboriosam. Minima dolor pariatur illum excepturi quos iusto esse molestiae quo debitis suscipit! Corporis soluta sint vel fugit, debitis dignissimos repellat quos mollitia minima itaque deleniti veritatis commodi!</p>'
        // ]);

        // blog::create([
        //     'category_id' => '1', 
        //     'user_id' => '1',
        //     'title' => 'Judul Blog Kedua', 
        //     'slug' => 'judul-blog-kedua', 
        //     'excerpt' => 'lorem testing blog kedua',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque incidunt est veniam voluptatibus ad ex nulla totam provident soluta, reprehenderit quisquam illum quibusdam nobis sed sequi animi eos praesentium culpa dolores repudiandae. Inventore obcaecati consequuntur corporis sed voluptates suscipit tempore ipsum minus laborum assumenda, iste quo, rem quae sit accusantium laudantium consectetur aliquid! Corrupti nisi exercitationem quasi reprehenderit, eveniet suscipit. Perferendis nostrum harum repellendus, quas quae ipsum dolorum consectetur magnam repellat optio minus omnis saepe animi quidem sequi ex nihil laboriosam laudantium non? Tempora quia animi id distinctio praesentium eius debitis laboriosam laudantium natus aperiam quam, minus, pariatur, quo enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni neque fugit ipsam blanditiis sit aut dolores non, maxime modi exercitationem aliquid voluptatibus optio eos tempora unde voluptatem ut doloremque facere illo ipsum velit assumenda. Debitis ipsam blanditiis, porro amet aut repudiandae id iusto quidem nulla laborum esse ut quisquam doloremque molestiae. Rem officiis vitae porro mollitia aspernatur quo aut odio nesciunt a sequi atque nobis, veniam iste excepturi sint corrupti, laborum quibusdam! Vero magnam natus totam quidem atque tempore aliquam incidunt eveniet hic dignissimos, quos ut? Nisi nobis placeat maiores eligendi qui doloremque. Sint iste natus debitis repellendus voluptates vitae, odio blanditiis esse doloribus sapiente tempore, ad veritatis delectus porro quibusdam. Alias magni dolorem doloribus officia in minus quidem, eveniet amet fuga animi quas, doloremque modi numquam natus voluptas voluptates eaque cumque. Incidunt iusto exercitationem tempore, labore perspiciatis voluptate, quasi dolor pariatur eligendi veritatis perferendis, quod id ut facere nemo harum reprehenderit commodi fugiat eaque? Obcaecati, ratione vero! Aliquam maxime odit sed culpa a, excepturi quidem non ipsam, officia perferendis iste laudantium accusamus ab nulla facilis optio quasi eaque eligendi tenetur nostrum exercitationem rem. Fuga, dignissimos accusamus! Obcaecati nesciunt quam quasi non, magnam itaque quis exercitationem aspernatur libero doloribus veniam?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloribus est autem nesciunt praesentium perspiciatis ullam aliquam libero nisi voluptates numquam inventore itaque quae dolores officia, asperiores id labore assumenda porro molestias, magnam neque tempora atque placeat! Eveniet ipsum rem, praesentium mollitia dolorum quos aliquam incidunt cupiditate laboriosam. Minima dolor pariatur illum excepturi quos iusto esse molestiae quo debitis suscipit! Corporis soluta sint vel fugit, debitis dignissimos repellat quos mollitia minima itaque deleniti veritatis commodi!</p>'
        // ]);

        // blog::create([
        //     'category_id' => '2', 
        //     'user_id' => '2',
        //     'title' => 'Judul Blog Ketiga', 
        //     'slug' => 'judul-blog-ketiga', 
        //     'excerpt' => 'lorem testing blog ketiga',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque incidunt est veniam voluptatibus ad ex nulla totam provident soluta, reprehenderit quisquam illum quibusdam nobis sed sequi animi eos praesentium culpa dolores repudiandae. Inventore obcaecati consequuntur corporis sed voluptates suscipit tempore ipsum minus laborum assumenda, iste quo, rem quae sit accusantium laudantium consectetur aliquid! Corrupti nisi exercitationem quasi reprehenderit, eveniet suscipit. Perferendis nostrum harum repellendus, quas quae ipsum dolorum consectetur magnam repellat optio minus omnis saepe animi quidem sequi ex nihil laboriosam laudantium non? Tempora quia animi id distinctio praesentium eius debitis laboriosam laudantium natus aperiam quam, minus, pariatur, quo enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni neque fugit ipsam blanditiis sit aut dolores non, maxime modi exercitationem aliquid voluptatibus optio eos tempora unde voluptatem ut doloremque facere illo ipsum velit assumenda. Debitis ipsam blanditiis, porro amet aut repudiandae id iusto quidem nulla laborum esse ut quisquam doloremque molestiae. Rem officiis vitae porro mollitia aspernatur quo aut odio nesciunt a sequi atque nobis, veniam iste excepturi sint corrupti, laborum quibusdam! Vero magnam natus totam quidem atque tempore aliquam incidunt eveniet hic dignissimos, quos ut? Nisi nobis placeat maiores eligendi qui doloremque. Sint iste natus debitis repellendus voluptates vitae, odio blanditiis esse doloribus sapiente tempore, ad veritatis delectus porro quibusdam. Alias magni dolorem doloribus officia in minus quidem, eveniet amet fuga animi quas, doloremque modi numquam natus voluptas voluptates eaque cumque. Incidunt iusto exercitationem tempore, labore perspiciatis voluptate, quasi dolor pariatur eligendi veritatis perferendis, quod id ut facere nemo harum reprehenderit commodi fugiat eaque? Obcaecati, ratione vero! Aliquam maxime odit sed culpa a, excepturi quidem non ipsam, officia perferendis iste laudantium accusamus ab nulla facilis optio quasi eaque eligendi tenetur nostrum exercitationem rem. Fuga, dignissimos accusamus! Obcaecati nesciunt quam quasi non, magnam itaque quis exercitationem aspernatur libero doloribus veniam?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloribus est autem nesciunt praesentium perspiciatis ullam aliquam libero nisi voluptates numquam inventore itaque quae dolores officia, asperiores id labore assumenda porro molestias, magnam neque tempora atque placeat! Eveniet ipsum rem, praesentium mollitia dolorum quos aliquam incidunt cupiditate laboriosam. Minima dolor pariatur illum excepturi quos iusto esse molestiae quo debitis suscipit! Corporis soluta sint vel fugit, debitis dignissimos repellat quos mollitia minima itaque deleniti veritatis commodi!</p>'
        // ]);

        // blog::create([
        //     'category_id' => '2', 
        //     'user_id' => '1',
        //     'title' => 'Judul Blog Keempat', 
        //     'slug' => 'judul-blog-keempat', 
        //     'excerpt' => 'lorem testing blog keempat',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque incidunt est veniam voluptatibus ad ex nulla totam provident soluta, reprehenderit quisquam illum quibusdam nobis sed sequi animi eos praesentium culpa dolores repudiandae. Inventore obcaecati consequuntur corporis sed voluptates suscipit tempore ipsum minus laborum assumenda, iste quo, rem quae sit accusantium laudantium consectetur aliquid! Corrupti nisi exercitationem quasi reprehenderit, eveniet suscipit. Perferendis nostrum harum repellendus, quas quae ipsum dolorum consectetur magnam repellat optio minus omnis saepe animi quidem sequi ex nihil laboriosam laudantium non? Tempora quia animi id distinctio praesentium eius debitis laboriosam laudantium natus aperiam quam, minus, pariatur, quo enim.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni neque fugit ipsam blanditiis sit aut dolores non, maxime modi exercitationem aliquid voluptatibus optio eos tempora unde voluptatem ut doloremque facere illo ipsum velit assumenda. Debitis ipsam blanditiis, porro amet aut repudiandae id iusto quidem nulla laborum esse ut quisquam doloremque molestiae. Rem officiis vitae porro mollitia aspernatur quo aut odio nesciunt a sequi atque nobis, veniam iste excepturi sint corrupti, laborum quibusdam! Vero magnam natus totam quidem atque tempore aliquam incidunt eveniet hic dignissimos, quos ut? Nisi nobis placeat maiores eligendi qui doloremque. Sint iste natus debitis repellendus voluptates vitae, odio blanditiis esse doloribus sapiente tempore, ad veritatis delectus porro quibusdam. Alias magni dolorem doloribus officia in minus quidem, eveniet amet fuga animi quas, doloremque modi numquam natus voluptas voluptates eaque cumque. Incidunt iusto exercitationem tempore, labore perspiciatis voluptate, quasi dolor pariatur eligendi veritatis perferendis, quod id ut facere nemo harum reprehenderit commodi fugiat eaque? Obcaecati, ratione vero! Aliquam maxime odit sed culpa a, excepturi quidem non ipsam, officia perferendis iste laudantium accusamus ab nulla facilis optio quasi eaque eligendi tenetur nostrum exercitationem rem. Fuga, dignissimos accusamus! Obcaecati nesciunt quam quasi non, magnam itaque quis exercitationem aspernatur libero doloribus veniam?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloribus est autem nesciunt praesentium perspiciatis ullam aliquam libero nisi voluptates numquam inventore itaque quae dolores officia, asperiores id labore assumenda porro molestias, magnam neque tempora atque placeat! Eveniet ipsum rem, praesentium mollitia dolorum quos aliquam incidunt cupiditate laboriosam. Minima dolor pariatur illum excepturi quos iusto esse molestiae quo debitis suscipit! Corporis soluta sint vel fugit, debitis dignissimos repellat quos mollitia minima itaque deleniti veritatis commodi!</p>'
        // ]);

        category::create([
            'name' => 'Programming', 
            'slug' => 'programming'
        ]);

        category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        category::create([
            'name' => 'Personal', 
            'slug' => 'personal'
        ]);


    }

}
