<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['currency_rate', 'sell_lifetime', 'withdrawal_limit'];
}
