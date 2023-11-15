<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'description', 'tags', 'date_added','subject_id'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reviewSessions():HasMany
    {
        return $this->hasMany(ReviewSession::class);
    }
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
