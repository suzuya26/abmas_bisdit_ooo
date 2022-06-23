<?php

namespace Database\Seeders;

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
        $this->call([
            bahandasarseeder::class,
            caramasakseeder::class,
            FavoriteSeeder::class,
            jenisolehseeder::class,
            lokasiseeder::class,
            rasaseeder::class,
            teksturseeder::class,
            varianjenisseeder::class,
            varianolehseeder::class,
            tempatbeliSeeder::class,
            TokoSeeder::class,
            produktokoseeder::class,

        ]);
    }
}
