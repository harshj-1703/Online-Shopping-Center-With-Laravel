<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordermaster extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "ordermaster";
    protected $primarykey = "id";
}
