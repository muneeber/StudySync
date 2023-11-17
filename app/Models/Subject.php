<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function topics():HasMany
    {
        return $this->hasMany(Topic::class);
    }
    public function tests():HasMany
    {
        return $this->hasMany(Test::class);
    }
    public function review_sessions():HasMany
    {
        return $this->hasMany(ReviewSession::class);
    }
}
