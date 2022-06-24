<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcontent extends Model
{
    protected $table = 'bcontents';
    protected $primayKey = 'id';
    public $timestamps = false; 
}
