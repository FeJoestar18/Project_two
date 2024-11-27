<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model            //Caso SUBSCRIPTION tenha a ver com USER e PLAN
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plna()
    {
        return $this->belongsTo(Plan::class);
    }
}