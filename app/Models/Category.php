<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    //$category->categories
    public function categories()
    {
        return $this->hasMany('App\Models\Categoy','parent_id');
    }

    //$category->parent
    public function parent()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
