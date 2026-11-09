<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id', 'name', 'price', 
        'condition', 'description', 'status', 'location_area'
    ];

    // Relasi ke tabel users (Penjual)
    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}