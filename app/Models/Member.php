<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $table = 'member';
    protected $primaryKey = 'userid';

    public $timestamps = false;
}
