<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'label',
    'categorie',
    'difficulte',
    'already_use'
  ];
}
