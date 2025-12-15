<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ Importante
// use App\Models\Product; // No lo necesitas si usas DB::table

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=>'Laptop ASUS',      'description'=>'Laptop gamer',                'price'=>24999.99, 'code'=>'ASUS001', 'stock'=>10, 'is_activate'=>true],
            ['name'=>'Teclado Mecánico', 'description'=>'Teclado RGB',                 'price'=>1999.99,  'code'=>'TEC001',  'stock'=>25, 'is_activate'=>true],
            ['name'=>'Mouse Logitech',   'description'=>'Mouse gamer RGB',            'price'=>499.99,   'code'=>'MOU001',  'stock'=>30, 'is_activate'=>true],
            ['name'=>'Monitor Samsung',  'description'=>'Monitor 27\" Full HD',       'price'=>5999.99,  'code'=>'MON001',  'stock'=>15, 'is_activate'=>true],
            ['name'=>'SSD Kingston',     'description'=>'SSD 1TB',                     'price'=>1599.99,  'code'=>'SSD001',  'stock'=>50, 'is_activate'=>true],
            ['name'=>'Audífonos HyperX', 'description'=>'Audífonos con micrófono',    'price'=>1299.99,  'code'=>'AUD001',  'stock'=>20, 'is_activate'=>true],
            ['name'=>'Webcam Logitech',  'description'=>'Webcam 1080p',                'price'=>899.99,   'code'=>'WEB001',  'stock'=>12, 'is_activate'=>true],
            ['name'=>'USB Kingston',     'description'=>'USB 64GB',                     'price'=>199.99,   'code'=>'USB001',  'stock'=>100,'is_activate'=>true],
            ['name'=>'Motherboard MSI',  'description'=>'Motherboard para Ryzen',      'price'=>3999.99,  'code'=>'MOT001',  'stock'=>8,  'is_activate'=>true],
            ['name'=>'Fuente Corsair',   'description'=>'Fuente 650W',                  'price'=>1499.99,  'code'=>'FUE001',  'stock'=>10, 'is_activate'=>true],
        ]);
    }
}
