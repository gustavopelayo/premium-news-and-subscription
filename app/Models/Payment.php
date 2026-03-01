<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;    
    protected $fillable = [
        'subscription_id',
        'amount',
        '´',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
