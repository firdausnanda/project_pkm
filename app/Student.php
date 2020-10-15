<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nim', 'nama', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'jk', 'username_sim', 'password_sim'];

    public function major()
    {
      return $this->belongsTo('App\Major');
    }

    public function user()
    {
      return $this->hasOne('App\User');
    }
}
