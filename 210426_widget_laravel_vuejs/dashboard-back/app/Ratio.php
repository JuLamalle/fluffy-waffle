<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratio extends Model
{
  public $timestamps = false;
  protected $fillable = [
    'currency_from',
    'currency_to',
    'ratio'
  ];
}
