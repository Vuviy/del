<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class CartPlace extends Model
{
    use HasFactory;

    protected $fillable = ['city', 'student_cart_id'];

    public function studentCart(): BelongsTo
    {
        return $this->belongsTo(StudentCart::class);
    }

    public function student(): HasOneThrough
    {
        return $this->hasOneThrough(Student::class, StudentCart::class);
    }
}
