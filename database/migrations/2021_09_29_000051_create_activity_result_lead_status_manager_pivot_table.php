<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityResultLeadStatusManagerPivotTable extends Migration
{
    public function up()
    {
        Schema::create('activity_result_lead_status_manager', function (Blueprint $table) {
            $table->unsignedBigInteger('lead_status_manager_id');
            $table->foreign('lead_status_manager_id', 'lead_status_manager_id_fk_4968490')->references('id')->on('lead_status_managers')->onDelete('cascade');
            $table->unsignedBigInteger('activity_result_id');
            $table->foreign('activity_result_id', 'activity_result_id_fk_4968490')->references('id')->on('activity_results')->onDelete('cascade');
        });
    }
}
