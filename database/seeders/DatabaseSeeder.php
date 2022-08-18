<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
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
        $this->call([UserTypeSeeder::class]);
        \App\Models\User::factory(20)->create();
        \App\Models\UserLocation::factory(50)->create();
        \App\Models\SellerProfile::factory(20)->state(new Sequence(
            fn ($i) => ['user_id' => $i->index + 1],
        ))->create();
        \App\Models\User::factory(10)->create()->each(function ($u) {
            $u->sellers()->attach(rand(1, 20));
        });
        \App\Models\Notification::factory(200)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
