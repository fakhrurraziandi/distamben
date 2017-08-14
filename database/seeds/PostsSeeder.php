<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Lorem ipsum dolor sit amet.',
                'slug' => 'lorem-ipsum-dolor-sit-amet',
                'category_id' => 1,
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur laudantium repudiandae adipisci ea cum quasi, sit, perspiciatis cupiditate autem quaerat, cumque sunt minus eaque sapiente veritatis dolore, labore dolorum non.</p><p>Nihil, deserunt dolorem, minus omnis ea repudiandae. Similique, assumenda vero laboriosam eos harum cum nam quis, ut quisquam temporibus aut, quae. Ex, harum quibusdam quia totam cum ad vel quod?</p><p>Fugit, reiciendis. At inventore iusto enim delectus dolorem qui tempora ad, saepe eius ea facere, libero repellat autem dicta, atque dolorum consectetur? Veniam dignissimos dolorum quasi, praesentium explicabo, provident sint.</p><p>Esse laborum obcaecati, qui soluta voluptatem. Facilis, reprehenderit autem, dolorem earum reiciendis maxime dicta, ducimus dolore illo minus labore aperiam praesentium quos animi, laborum perspiciatis quo. Vero nostrum quidem porro!</p>'
            ],
            [
                'title' => 'Consectetur adipisicing elit',
                'slug' => 'consectetur-adipisicing-elit',
                'category_id' => 2,
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur laudantium repudiandae adipisci ea cum quasi, sit, perspiciatis cupiditate autem quaerat, cumque sunt minus eaque sapiente veritatis dolore, labore dolorum non.</p><p>Nihil, deserunt dolorem, minus omnis ea repudiandae. Similique, assumenda vero laboriosam eos harum cum nam quis, ut quisquam temporibus aut, quae. Ex, harum quibusdam quia totam cum ad vel quod?</p><p>Fugit, reiciendis. At inventore iusto enim delectus dolorem qui tempora ad, saepe eius ea facere, libero repellat autem dicta, atque dolorum consectetur? Veniam dignissimos dolorum quasi, praesentium explicabo, provident sint.</p><p>Esse laborum obcaecati, qui soluta voluptatem. Facilis, reprehenderit autem, dolorem earum reiciendis maxime dicta, ducimus dolore illo minus labore aperiam praesentium quos animi, laborum perspiciatis quo. Vero nostrum quidem porro!</p>'
            ],
            [
                'title' => 'Aspernatur laudantium repudiandae adipisci',
                'category_id' => 1,
                'slug' => 'aspernatur-laudantium-repudiandae-adipisci',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur laudantium repudiandae adipisci ea cum quasi, sit, perspiciatis cupiditate autem quaerat, cumque sunt minus eaque sapiente veritatis dolore, labore dolorum non.</p><p>Nihil, deserunt dolorem, minus omnis ea repudiandae. Similique, assumenda vero laboriosam eos harum cum nam quis, ut quisquam temporibus aut, quae. Ex, harum quibusdam quia totam cum ad vel quod?</p><p>Fugit, reiciendis. At inventore iusto enim delectus dolorem qui tempora ad, saepe eius ea facere, libero repellat autem dicta, atque dolorum consectetur? Veniam dignissimos dolorum quasi, praesentium explicabo, provident sint.</p><p>Esse laborum obcaecati, qui soluta voluptatem. Facilis, reprehenderit autem, dolorem earum reiciendis maxime dicta, ducimus dolore illo minus labore aperiam praesentium quos animi, laborum perspiciatis quo. Vero nostrum quidem porro!</p>'
            ]
        ]);
    }
}
