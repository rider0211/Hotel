<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('act_notes')->nullable();
            $table->datetime('act_start')->nullable();
            $table->datetime('act_due_by')->nullable();
            $table->datetime('act_end')->nullable();
            $table->string('contact')->nullable();
            $table->string('activity_name')->nullable();
            $table->string('activity_type')->nullable();
            $table->string('activity_reference')->nullable();
            $table->string('activity_result')->nullable();
            $table->string('activity_completed_date')->nullable();
            $table->string('activity_due_date')->nullable();
            $table->string('activity_reminder_minutes')->nullable();
            $table->string('activity_notes')->nullable();
            $table->string('appt')->nullable();
            $table->string('activity_assign_emp')->nullable();
            $table->string('activity_sched_emp')->nullable();
            $table->string('activity_reminder_is_dismissed')->nullable();
            $table->string('is_active')->nullable();
            $table->string('last_updateby')->nullable();
            $table->string('last_update')->nullable();
            $table->string('id_led')->nullable();
            $table->string('activityresultid')->nullable();
            $table->string('activityreferenceid')->nullable();
            $table->string('t_scheduler_event')->nullable();
            $table->string('activity_process_step')->nullable();
            $table->string('id_job')->nullable();
            $table->string('process_type_steps')->nullable();
            $table->string('service_order')->nullable();
            $table->string('contact_marketing_queue')->nullable();
            $table->string('column_27')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
