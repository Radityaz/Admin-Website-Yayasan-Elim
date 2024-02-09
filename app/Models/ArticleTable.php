<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTable extends Model
{
    use HasFactory;
    protected $table = 'article';

    public function scopeSearch($query, $term)
    {
        $query->where(function ($query) use ($term) {
            $query->where('title', 'LIKE', "%{$term}%")
                ->orWhere('author', 'LIKE', "%{$term}%");
        });
    }

}
