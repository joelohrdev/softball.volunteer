<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'coach_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dates()
    {
        return $this->hasMany(Date::class);
    }

}
