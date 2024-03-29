<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
        'genre'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'id_music');
    }
}
