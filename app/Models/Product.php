<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
