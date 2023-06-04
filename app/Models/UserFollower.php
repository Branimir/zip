<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFollower extends Model
{
    public function follower() {
        return $this->belongsTo(User::class);
    }

    public function following() {
        return $this->belongsTo(User::class);
    }

    protected $table = 'user_followers';

    protected $fillable = [
        'follower_id',
        'following_id'
    ];
}
