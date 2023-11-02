<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

/**
 * @mixin Builder
 */
class Additional extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rate_id'];

    public function rate(): BelongsTo
    {
        return $this->belongsTo(Rate::class);
    }

//    public function student(): HasOneThrough
//    {
//        return $this->hasOneThrough(Student::class, Rate::class);
//    }

    public function student()
    {
        return Student::find($this->rate->student_id);
    }

}
