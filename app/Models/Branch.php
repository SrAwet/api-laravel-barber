<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name','adress','phone'
    ];

    public function stylists()
    {
        return $this->hasMany(Stylist::class, 'id_branch');
    }
}
