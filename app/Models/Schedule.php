<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'id_branch','id_stylist','day_of_week','start_time','end_time'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'id_branch');
    }

    public function stylist()
    {
        return $this->belongsTo(Stylist::class, 'id_stylist');
    }

}
