<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    // in order to not get an error for not creating two columns
    //created_at and updated_at
    public $timestamps = false;
}
