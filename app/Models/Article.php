<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use SoftDeletes;

    /** @return BelongsTo<Category> */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /** @return BelongsToMany<Tag> */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'tag_id');
    }

    /** @return BelongsToMany<User> */
    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'article_user', 'article_id', 'user_id');
    }
}
