<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['nama', 'jk', 'nidn', 'tempat_lahir', 'tgl_lahir', 'email', 'no_hp'];
}
