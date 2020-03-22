<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = [
        'date'
    ];

    public function event()
    {
        return $this->hasOne(Event::class);
    }
}
