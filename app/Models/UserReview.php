<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reviewer() {
        return $this->belongsTo(User::class);
    }

    protected $table = 'user_reviews';

    protected $fillable = [
        'content',
        'rate',
        'is_approved',
        'user_id',
        'reviewer_id'
    ];
}
