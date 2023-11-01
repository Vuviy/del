<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'text'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class  );
    }

    public function polyComments(): MorphMany
    {
        return $this->morphMany(PolyComment::class, 'commentable');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withPivot(['is_published', 'priority']);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function polyTags(): MorphToMany
    {
        return $this->morphToMany(PolyTag::class, 'taggable');
    }

}
