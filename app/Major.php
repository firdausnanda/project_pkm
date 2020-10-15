<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = ['degree', 'name'];

    public function getFullNameAttribute()
    {
      return "{$this->degree} {$this->name}";
    }

}
