<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Berita',
                'slug' => 'berita',
            ],
            [
                'title' => 'Siaran Pers',
                'slug' => 'siaran-pers',
            ],
            [
                'title' => 'Pengumuman',
                'slug' => 'pengumuman',
            ],
        ]);
    }
}
