<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdCategory extends Model
{
    public function ads() {
        return $this->hasMany(Ad::class);
    }

    protected $table = 'ad_categories';

    protected $fillable = [
        'name',
        'number_of_ads',
        'category_attributes'
    ];
}
