<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartsOrder extends Model
{
    use SoftDeletes;

    public $table = 'parts_orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'realed_job_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function realed_job()
    {
        return $this->belongsTo(Job::class, 'realed_job_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
