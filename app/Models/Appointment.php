<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;
    use Auditable;

    public $table = 'appointments';

    protected $dates = [
        'appt_start_date',
        'appt_end_date',
        'appt_set_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'appt_start_date',
        'appt_end_date',
        'appt_notes',
        'id_app_result_id',
        'ms_id_appt_result',
        'id_res_reason_id',
        'ms_id_appt_reason',
        'appt_result_code_description',
        'id_appt_type',
        'ms_id_appt_type',
        'ms_id_appt',
        'ms_id_lead',
        'id_lead_id',
        'appt_sales_1_emp',
        'id_sales_assign_id',
        'appt_set_date',
        'appt_subject',
        'ms_appt_set_by',
        'appt_set_by_id',
        'confirmation_activity',
        'ms_id_sched',
        'is_active',
        'ms_is_active',
        'id_last_update_by_id',
        'ms_id_last_update_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getApptStartDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setApptStartDateAttribute($value)
    {
        $this->attributes['appt_start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getApptEndDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setApptEndDateAttribute($value)
    {
        $this->attributes['appt_end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function id_app_result()
    {
        return $this->belongsTo(ActivityResult::class, 'id_app_result_id');
    }

    public function id_res_reason()
    {
        return $this->belongsTo(ActivityResult::class, 'id_res_reason_id');
    }

    public function id_lead()
    {
        return $this->belongsTo(Lead::class, 'id_lead_id');
    }

    public function id_sales_assign()
    {
        return $this->belongsTo(User::class, 'id_sales_assign_id');
    }

    public function getApptSetDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setApptSetDateAttribute($value)
    {
        $this->attributes['appt_set_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function appt_set_by()
    {
        return $this->belongsTo(User::class, 'appt_set_by_id');
    }

    public function id_last_update_by()
    {
        return $this->belongsTo(User::class, 'id_last_update_by_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
