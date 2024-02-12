<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTable extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        $query->where(function ($query) use ($term) {
            $query->where('title', 'LIKE', "%{$term}%")
                ->where('author', 'LIKE', "%{$term}%")
                ->where('status', 'LIKE', "%{$term}%");
        });
        
    }

    // public function article_image()
    // {
    //     return $this->hasOne(ArticleImage::class);
    // }

    // public function article_image()
    // {
    //     return $this->hasOne(ArticleImage::class);
    // }

    public function article_image()
    {
        return $this->hasOne(ArticleImage::class,'image_id');
    }



}
