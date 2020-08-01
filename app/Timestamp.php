<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Timestamp extends Model
{
    

    public $timestamps = false;
    protected $fillable = ['user_id', 'Punch_in', 'Punch_out'];
    

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
