<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'job_title',
        'contact',
        'lead',
        'job_site',
        'job_number',
        'job_name',
        'job_desc',
        'job_type',
        'job_status',
        'job_address_1',
        'job_address_2',
        'job_city',
        'job_state',
        'job_zip',
        'job_structure_value_code',
        'job_note',
        'job_start_date',
        'sale_date',
        'job_completed_date',
        'qb_sync',
        'qb_sync_date',
        'qb',
        'is_active',
        'last_updateby',
        'last_update',
        'lead_appt_sold',
        'exported_to_guild_quality',
        'job_site_name',
        'qbweb',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function realedJobPartsOrders()
    {
        return $this->hasMany(PartsOrder::class, 'realed_job_id', 'id');
    }

    public function jobActivities()
    {
        return $this->hasMany(Activity::class, 'job_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
