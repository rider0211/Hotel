<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use SoftDeletes;
    use Auditable;

    public $table = 'leads';

    public static $searchable = [
        'goog_address',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_2',
        'phone',
        'phone_2',
        'description',
        'homephone',
        'goog_address',
        'lead_lon',
        'lead_lat',
        'lead_street',
        'lead_lot',
        'lead_city',
        'lead_state',
        'lead_zip',
        'lead_county',
        'dateassigned',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function leadActivities()
    {
        return $this->hasMany(Activity::class, 'lead_id', 'id');
    }

    public function idLeadAppointments()
    {
        return $this->hasMany(Appointment::class, 'id_lead_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
