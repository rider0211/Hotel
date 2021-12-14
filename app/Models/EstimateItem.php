<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstimateItem extends Model
{
    use SoftDeletes;
    use Auditable;

    public $table = 'estimate_items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'item_code',
        'item_name',
        'est_item_quantity',
        'est_item_price',
        'est_item_final_amount',
        'est_item_listprice',
        'est_item_venfactor',
        'est_item_factor_2',
        'est_item_factor_3',
        'est_item_margin',
        'est_item_cost',
        'est_item_profit',
        'est_private_detail',
        'est_extenditem_detail',
        'est_price_detail',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
