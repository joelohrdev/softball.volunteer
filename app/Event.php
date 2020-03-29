<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'category_id',
        'name'
    ];

    public function dates()
    {
        return $this->hasMany(Date::class)->latest();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
