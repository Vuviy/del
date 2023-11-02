<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * @mixin Builder
 */

class StudentCart extends Model
{
    use HasFactory;

    protected $fillable = ['desc'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function cartPlace(): HasOne
    {
        return $this->hasOne(StudentCart::class);
    }
}
