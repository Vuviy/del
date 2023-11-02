<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @mixin Builder
 */

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function studentCart(): HasOne
    {
        return $this->hasOne(StudentCart::class);
    }

//    public function lessons(): BelongsToMany
//    {
//        return $this->belongsToMany(Lesson::class);
//    }

    public function lessons(): MorphToMany
    {
        return $this->morphToMany(Lesson::class, 'lessonsable');
    }

    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class);
    }

    public function cartPlace(): HasOneThrough
    {
        return $this->hasOneThrough(CartPlace::class, StudentCart::class);
    }


    public function additionals(): HasManyThrough
    {
        return $this->hasManyThrough(Additional::class, Rate::class);
    }

}
