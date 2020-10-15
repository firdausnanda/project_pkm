<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['major_id', 'nim', 'nama', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'jk', 'username_sim', 'password_sim'];

    public function major()
    {
      return $this->belongsTo('App\Major');
    }

    public function user()
    {
      return $this->hasOne('App\User');
    }

    public function setNamaAttribute($value)
    {
      $this->attributes['nama'] = ucwords($value);
    }

    public function setTempatLahirAttribute($value)
    {
      $this->attributes['tempat_lahir'] = ucfirst($value);
    }

    public function setMajorIdAttribute($value)
    {
      $this->attributes['major_id'] = intval($value);
    }
}
