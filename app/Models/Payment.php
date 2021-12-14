<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'pay_amount',
        'job',
        'company',
        'payment_type',
        'contract',
        'payment_amount',
        'payment_method',
        'payment_description',
        'payment_date_time',
        'payment_cc_no',
        'applies_to_contract',
        'cashfinance',
        'is_active',
        'last_updateby',
        'last_update',
        'paysimple_payment',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
