<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerContact extends Model
{
    use SoftDeletes;
    use Auditable;

    public const CUST_VET_SELECT = [
        '1' => 'Veteran',
        '2' => 'Law Enforcement',
        '3' => 'Fire Dept.',
        '4' => 'Medical',
    ];

    public $table = 'customer_contacts';

    public static $searchable = [
        'cust_fullname',
        'ms_primary_email',
        'cust_email_2',
        'cust_phone_2',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ms_cust',
        'id_cust_status',
        'cust_status_id',
        'cust_comp',
        'cust_comid',
        'cust_fullname',
        'cust_title',
        'cust_vet',
        'cust_email',
        'ms_primary_email',
        'ms_secondary_email',
        'cust_email_2',
        'cust_phone',
        'cust_phone_2',
        'ms_phone',
        'cust_fax',
        'ms_address',
        'cust_address',
        'cust_route',
        'cust_city',
        'cust_state',
        'cust_zip',
        'cust_county',
        'cust_lat',
        'cust_lon',
        'cust_note',
        'cust_background',
        'ms_qb_sync_date',
        'ms_qb',
        'ms_qb_editsequence',
        'ms_qb_sync',
        'ms_qb_name',
        'ms_qbweb',
        'ms_created_by',
        'cust_created_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function cust_status()
    {
        return $this->belongsTo(CustomerStatus::class, 'cust_status_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
