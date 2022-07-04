<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrationdata extends Model
{
    use HasFactory;
    protected $table = "registration";
    protected $primarykey = "user_id";

    public function group(){
        return $this->hasMany('App\Models\ordermaster','buyeremail');
    }
}
