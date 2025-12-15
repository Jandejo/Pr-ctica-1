<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ProvedorsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear un usuario de ejemplo
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Llamar a los seeders de productos y provedores
        $this->call([
            ProductSeeder::class,
            ProvedorsSeeder::class,
        ]);
    }
}
