<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvedorsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('provedors')->insert([
            ['name'=>'ASUS México',       'contact'=>'Juan Pérez',     'phone'=>'5551234567', 'email'=>'asus.mx@example.com',      'direction'=>'CDMX'],
            ['name'=>'Logitech México',   'contact'=>'Ana Gómez',      'phone'=>'5559876543', 'email'=>'logitech.mx@example.com',  'direction'=>'Guadalajara'],
            ['name'=>'Samsung México',    'contact'=>'Carlos Ruiz',    'phone'=>'5556789012', 'email'=>'samsung.mx@example.com',   'direction'=>'Monterrey'],
            ['name'=>'Kingston México',   'contact'=>'Laura López',    'phone'=>'5553456789', 'email'=>'kingston.mx@example.com',  'direction'=>'CDMX'],
            ['name'=>'HyperX México',     'contact'=>'Jorge Díaz',     'phone'=>'5552345678', 'email'=>'hyperx.mx@example.com',    'direction'=>'Querétaro'],
            ['name'=>'MSI México',        'contact'=>'Sofía Torres',   'phone'=>'5558765432', 'email'=>'msi.mx@example.com',       'direction'=>'Monterrey'],
            ['name'=>'Corsair México',    'contact'=>'Pedro Ramírez',  'phone'=>'5555678901', 'email'=>'corsair.mx@example.com',   'direction'=>'CDMX'],
            ['name'=>'AMD México',        'contact'=>'Marta Flores',   'phone'=>'5554567890', 'email'=>'amd.mx@example.com',       'direction'=>'Guadalajara'],
            ['name'=>'Intel México',      'contact'=>'Luis Hernández','phone'=>'5556781234', 'email'=>'intel.mx@example.com',     'direction'=>'Monterrey'],
            ['name'=>'Razer México',      'contact'=>'Daniela Castro','phone'=>'5557890123', 'email'=>'razer.mx@example.com',     'direction'=>'CDMX'],
        ]);
    }
}
