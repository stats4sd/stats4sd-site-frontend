<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /** @return BelongsToMany<Article> */
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_tag', 'tag_id', 'article_id');
    }
}
