<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lbtc extends Model
{
    protected $fillable = [
    	'ad_id', 'contact_id', 'amount', 'currency', 'status'
    ];
}
