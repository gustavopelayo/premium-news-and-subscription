<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
