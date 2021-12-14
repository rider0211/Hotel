<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class ChangeOrder extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public const EST_STATE_SELECT = [
        'AL' => 'Alabama',
        'FL' => 'Florida',
    ];

    public const EST_COUNTY_SELECT = [
        'Escambia' => 'Escambia',
        'Baldwin'  => 'Baldwin',
        'Mobile'   => 'Mobile',
    ];

    public $table = 'change_orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'est_title',
        'est_stat',
        'updated_by',
        'est_state',
        'est_county',
        'est_total_before_tax',
        'est_state_tax',
        'est_county_tax',
        'est_total_after_tax',
        'est_note',
        'dep_calc_1',
        'dep_calc_2',
        'dep_calc_3',
        'est_desposit_1',
        'est_desposit_2',
        'est_deposit_3',
        'est_view_price',
        'est_view_qty',
        'est_view_detail',
        'est_access',
        'est_cust_email_signed',
        'est_cust_first_signed',
        'est_cust_last_signed',
        'est_sign',
        'est_sign_int',
        'est_approve_date',
        'est_user_ip',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
