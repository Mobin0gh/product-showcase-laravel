<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/'.$this->image);
        }

        return asset('images/no-image.png');
    }

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
