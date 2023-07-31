<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic_user extends Model
{
    protected $fillable = [
      'user_id',
      'topic_id',
      'transaction_id',
      'status',
      'amount',
    ];
}
