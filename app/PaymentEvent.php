<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentEvent extends Model
{
	protected $table = 'payment_event';
	protected $fillable = [
        'event_id', 'user_id', 'created_at', 'updated_at'
    ];
    
}
