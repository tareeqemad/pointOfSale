<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';

    public function user_modify()
    {
        return $this->belongsTo('\App\User','user_modifies');
    }
}
