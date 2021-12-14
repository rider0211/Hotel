<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityType extends Model
{
    use SoftDeletes;
    use Auditable;

    public $table = 'activity_types';

    protected $dates = [
        'due_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'act_type',
        'due_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getDueByAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setDueByAttribute($value)
    {
        $this->attributes['due_by'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
