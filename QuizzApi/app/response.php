<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{
  protected $fillable = [
    'id',
    'label',
    'question_id',
    'correct'
  ];
}
