<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function category() {
        return $this->belongsTo(AdCategory::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function attributes() {
        return $this->hasMany(AdAttribute::class);
    }

    public function media() {
        return $this->hasMany(AdMedia::class);
    }

    protected $table = 'ads';

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'price',
        'price_history',
        'status',
        'promotion_level',
        'tags',
        'type',
        'number_of_views',
        'number_of_likes',
        'number_of_dislikes',
        'category_id',
        'user_id',
        'state'
    ];
}
