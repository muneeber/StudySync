<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReviewSession extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','	subject_id','	topic_id','	review_date'
    ];
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    public function topic():BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
