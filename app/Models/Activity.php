<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Activity extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;
    use Auditable;

    public $table = 'activities';

    protected $dates = [
        'act_start',
        'act_due_by',
        'act_end',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'act_notes',
        'act_start',
        'act_due_by',
        'act_end',
        'lead_id',
        'job_id',
        'contact',
        'activity_name',
        'activity_type',
        'activity_reference',
        'activity_result',
        'activity_completed_date',
        'activity_due_date',
        'activity_reminder_minutes',
        'activity_notes',
        'appt',
        'activity_assign_emp',
        'activity_sched_emp',
        'activity_reminder_is_dismissed',
        'is_active',
        'last_updateby',
        'last_update',
        'id_led',
        'activityresultid',
        'activityreferenceid',
        't_scheduler_event',
        'activity_process_step',
        'id_job',
        'process_type_steps',
        'service_order',
        'contact_marketing_queue',
        'column_27',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getActStartAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setActStartAttribute($value)
    {
        $this->attributes['act_start'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getActDueByAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setActDueByAttribute($value)
    {
        $this->attributes['act_due_by'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getActEndAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setActEndAttribute($value)
    {
        $this->attributes['act_end'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function lead()
    {
        return $this->belongsTo(Lead::class, 'lead_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
