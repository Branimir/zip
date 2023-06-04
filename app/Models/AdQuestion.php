<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdQuestion extends Model
{

    public function ad() {
        return $this->belongsTo(Ad::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function question() {
        return $this->belongsTo(AdQuestion::class);
    }

    protected $table = 'ad_questions';

    protected $fillable = [
        'content',
        'is_public',
        'is_seen',
        'is_closed',
        'question_id',
        'user_id',
        'ad_id'
    ];

}
