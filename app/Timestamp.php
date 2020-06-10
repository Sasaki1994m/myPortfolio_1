<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timestamp extends Model
{
    protected $fillable = [
        'user_id', 'PunchIn', 'PunchOut',
    ];

    public function user()
    {
        return $this->belongsTo('App\Timestamp');
    }
}
