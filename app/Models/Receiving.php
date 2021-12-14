<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receiving extends Model
{
    use SoftDeletes;

    public $table = 'receivings';

    protected $dates = [
        'rcv_expected',
        'rcv_received',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'rcv_vendor',
        'rcv_expected',
        'rcv_received',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getRcvExpectedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setRcvExpectedAttribute($value)
    {
        $this->attributes['rcv_expected'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getRcvReceivedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setRcvReceivedAttribute($value)
    {
        $this->attributes['rcv_received'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
