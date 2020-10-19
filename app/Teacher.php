<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['major_id','nama', 'jk', 'nidn', 'tempat_lahir', 'tgl_lahir', 'email', 'no_hp'];

    public function user()
    {
      return $this->hasOne('App\User');
    }

    public function setMajorIdAttribute($value)
    {
      $this->attributes['major_id'] = intval($value);
    }
}
