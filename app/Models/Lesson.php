<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @mixin Builder
 */
class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'student_id', 'lessonsable_id', 'lessonsable_type'];

//    public function students(): BelongsToMany
//    {
//        return $this->belongsToMany(Student::class);
//    }

    public function students(): MorphToMany
    {
        return $this->morphedByMany(Student::class, 'lessonsable');
    }

    public function teachers(): MorphToMany
    {
        return $this->morphedByMany(Teacher::class, 'lessonsable');
    }

}
