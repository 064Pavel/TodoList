<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'notes',
        'date',
        'is_done',
        'priority_id',
        'user_id'
    ];

    public function priority() : HasOne{
        return $this->hasOne(Priority::class, 'id', 'priority_id');
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
