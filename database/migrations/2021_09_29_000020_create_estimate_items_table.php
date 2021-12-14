<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('estimate_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_code')->nullable();
            $table->string('item_name')->nullable();
            $table->string('est_item_quantity')->nullable();
            $table->string('est_item_price')->nullable();
            $table->string('est_item_final_amount')->nullable();
            $table->string('est_item_listprice')->nullable();
            $table->string('est_item_venfactor')->nullable();
            $table->string('est_item_factor_2')->nullable();
            $table->string('est_item_factor_3')->nullable();
            $table->string('est_item_margin')->nullable();
            $table->string('est_item_cost')->nullable();
            $table->string('est_item_profit')->nullable();
            $table->longText('est_private_detail')->nullable();
            $table->string('est_extenditem_detail')->nullable();
            $table->string('est_price_detail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
