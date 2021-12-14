<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('change_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('est_title')->nullable();
            $table->string('est_stat')->nullable();
            $table->integer('updated_by')->nullable();
            $table->string('est_state');
            $table->string('est_county');
            $table->decimal('est_total_before_tax', 15, 2)->nullable();
            $table->string('est_state_tax')->nullable();
            $table->string('est_county_tax')->nullable();
            $table->string('est_total_after_tax')->nullable();
            $table->longText('est_note')->nullable();
            $table->string('dep_calc_1');
            $table->string('dep_calc_2');
            $table->string('dep_calc_3');
            $table->decimal('est_desposit_1', 15, 2)->nullable();
            $table->decimal('est_desposit_2', 15, 2)->nullable();
            $table->decimal('est_deposit_3', 15, 2)->nullable();
            $table->boolean('est_view_price')->default(0)->nullable();
            $table->boolean('est_view_qty')->default(0)->nullable();
            $table->boolean('est_view_detail')->default(0)->nullable();
            $table->string('est_access')->nullable();
            $table->string('est_cust_email_signed')->nullable();
            $table->string('est_cust_first_signed')->nullable();
            $table->string('est_cust_last_signed')->nullable();
            $table->string('est_sign')->nullable();
            $table->string('est_sign_int')->nullable();
            $table->string('est_approve_date')->nullable();
            $table->string('est_user_ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
