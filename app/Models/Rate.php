<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Builder
 */
class Rate extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'student_id'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function additionals(): HasMany
    {
        return $this->hasMany(Additional::class);
    }
}
