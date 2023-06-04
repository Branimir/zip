<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdMedia extends Model
{

    public function ad() {
        return $this->belongsTo(Ad::class);
    }

    protected $table = 'ad_media';

    protected $fillable = [
        'media_url',
        'ad_id'
    ];

}
