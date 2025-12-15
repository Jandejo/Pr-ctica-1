<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'code',          // ✅ Agregado
        'stock',
        'is_activate',
    ];

    protected $casts = [
        'is_activate' => 'boolean',
        'price'       => 'decimal:2',
    ];
}
