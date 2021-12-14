<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use SoftDeletes;
    use Auditable;

    public const PRIMARY_PHONE_TYPE_SELECT = [
        '11' => 'Home Phone',
        '4'  => 'Mobile Phone',
        '12' => 'Work Phone',
        '13' => 'Other phone',
        '6'  => 'Home Phone 2',
        '14' => 'Mobile Phone 2',
        '9'  => 'Work Phone 2',
        '15' => 'Other phone 2',
    ];

    public $table = 'phones';

    protected $dates = [
        'ms_phone_dnc_exempt_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ms_phone_type_name',
        'primary_phone_type',
        'primary_phone',
        'phone_contact',
        'primary_ext',
        'primary_dnc',
        'primary_dnt',
        'phone',
        'ms_access_company',
        'ms_phone_type',
        'ms_phone_cty_code',
        'ms_phone_area_code',
        'ms_phone_number',
        'ms_primary_phone_type',
        'ms_phone_dnc',
        'ms_phone_fed_do_not_call',
        'ms_phone_state_do_not_call',
        'ms_written_permission_dnc',
        'ms_phone_dnc_exempt_date',
        'ms_phone_dnc_exempt',
        'ms_phone_house_do_not_call',
        'ms_phone_description',
        'ms_phone_ext',
        'ms_phone_do_not_fax',
        'ms_is_active',
        'last_updateby_user',
        'ms_last_update',
        'ms_phonenumbersearch',
        'ms_phonenumberexcludingareacodesearch',
        'ms_phone_dnt',
        'ms_phone_dnt_texting_opt_out',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getMsPhoneDncExemptDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setMsPhoneDncExemptDateAttribute($value)
    {
        $this->attributes['ms_phone_dnc_exempt_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
