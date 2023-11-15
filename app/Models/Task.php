<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'task_description', 'due_date', 'priority', 'is_completed'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
