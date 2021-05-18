<?php
// Our Currency model. Actually just an array of strings persisted in adatabase
namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;
    protected $fillable = [
      'name'
    ];

}
