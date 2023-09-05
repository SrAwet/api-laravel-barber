<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'id_client', 'id_stylist', 'id_service', 'id_drink', 'appointment_date', 'id_music'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function stylist()
    {
        return $this->belongsTo(Stylist::class, 'id_stylist');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function drink()
    {
        return $this->belongsTo(Drink::class, 'id_drink');
    }

    public function music()
    {
        return $this->belongsTo(Music::class, 'id_music');
    }
}

