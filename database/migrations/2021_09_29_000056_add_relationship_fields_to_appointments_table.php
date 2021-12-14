<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('id_app_result_id')->nullable();
            $table->foreign('id_app_result_id', 'id_app_result_fk_4990970')->references('id')->on('activity_results');
            $table->unsignedBigInteger('id_res_reason_id')->nullable();
            $table->foreign('id_res_reason_id', 'id_res_reason_fk_4990972')->references('id')->on('activity_results');
            $table->unsignedBigInteger('id_lead_id')->nullable();
            $table->foreign('id_lead_id', 'id_lead_fk_4990978')->references('id')->on('leads');
            $table->unsignedBigInteger('id_sales_assign_id')->nullable();
            $table->foreign('id_sales_assign_id', 'id_sales_assign_fk_4990979')->references('id')->on('users');
            $table->unsignedBigInteger('appt_set_by_id')->nullable();
            $table->foreign('appt_set_by_id', 'appt_set_by_fk_4990983')->references('id')->on('users');
            $table->unsignedBigInteger('id_last_update_by_id')->nullable();
            $table->foreign('id_last_update_by_id', 'id_last_update_by_fk_4990987')->references('id')->on('users');
        });
    }
}
