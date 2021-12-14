<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorLink extends Model
{
    use SoftDeletes;
    use Auditable;

    public const VLINK_TYPE_SELECT = [
        'Home Site'     => 'Home Site',
        'Dealer Portal' => 'Dealer Portal',
        'Social Media'  => 'Social Media',
        'Product Info'  => 'Product Info',
        'Other'         => 'Other',
    ];

    public $table = 'vendor_links';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ven_link',
        'vlink_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
