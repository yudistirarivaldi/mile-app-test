<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Transaction extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'transaction';

    protected $fillable = [
        'transaction_id',
        'customer_name',
        'customer_code',
        'transaction_amount',
        'transaction_discount',
        'transaction_additional_field',
        'transaction_payment_type',
        'transaction_state',
        'transaction_code',
        'transaction_order',
        'location_id',
        'organization_id',
        'created_at',
        'updated_at',
        'transaction_payment_type_name',
        'transaction_cash_amount',
        'transaction_cash_change',
        'customer_attribute',
        'connote',
        'connote_id',
        'origin_data',
        'destination_data',
        'koli_data',
        'custom_field',
        'currentLocation',
    ];

}
