<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdAttribute extends Model
{
    public function ad() {
        return $this->belongsTo(Ad::class);
    }

    protected $table = 'ad_attributes';

    protected $fillable = [
        'attribute_key',
        'attribute_value',
        'ad_id'
    ];
}
