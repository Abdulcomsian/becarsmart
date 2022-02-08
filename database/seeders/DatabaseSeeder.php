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
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(HeroSectionSeeder::class);
        $this->call(HowItWorksSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(WantToBuyCarSection::class);
        $this->call(WhySellCarSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogHeaderSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
