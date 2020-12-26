<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[

    ];

    protected $hidden=[

    ];

    //$producto->category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //$producto->images
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}