<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('appt_start_date');
            $table->datetime('appt_end_date');
            $table->string('appt_notes')->nullable();
            $table->string('ms_id_appt_result')->nullable();
            $table->string('ms_id_appt_reason')->nullable();
            $table->string('appt_result_code_description')->nullable();
            $table->string('id_appt_type')->nullable();
            $table->string('ms_id_appt_type')->nullable();
            $table->string('ms_id_appt')->nullable();
            $table->string('ms_id_lead')->nullable();
            $table->string('appt_sales_1_emp')->nullable();
            $table->datetime('appt_set_date')->nullable();
            $table->string('appt_subject')->nullable();
            $table->string('ms_appt_set_by')->nullable();
            $table->string('confirmation_activity')->nullable();
            $table->string('ms_id_sched')->nullable();
            $table->boolean('is_active')->default(0);
            $table->string('ms_is_active')->nullable();
            $table->string('ms_id_last_update_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
