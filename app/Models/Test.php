<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Test extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','unit'.'subject_id', 'test_description', 'test_date', 'test_marks'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
