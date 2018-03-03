<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
  protected $table = 'municipalitys';
  protected $guarded = [
    'id',
    'departament_id'
  ];
  protected $fillable = ['name'];
}
