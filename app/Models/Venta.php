<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_token',
        'customer_email',
        'amount',
        'purchase_number',
        'channel',
        'response_data',
    ];

    protected $casts = [
        'response_data' => 'array', // Cast a array
    ];
}
