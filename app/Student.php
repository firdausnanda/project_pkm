<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nim', 'nama', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'jk', 'username_sim', 'password_sim'];
}
