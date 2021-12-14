<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title');
            $table->string('contact')->nullable();
            $table->string('lead')->nullable();
            $table->string('job_site')->nullable();
            $table->string('job_number')->nullable();
            $table->string('job_name')->nullable();
            $table->string('job_desc')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_status')->nullable();
            $table->string('job_address_1')->nullable();
            $table->string('job_address_2')->nullable();
            $table->string('job_city')->nullable();
            $table->string('job_state')->nullable();
            $table->string('job_zip')->nullable();
            $table->string('job_structure_value_code')->nullable();
            $table->string('job_note')->nullable();
            $table->string('job_start_date')->nullable();
            $table->string('sale_date')->nullable();
            $table->string('job_completed_date')->nullable();
            $table->string('qb_sync')->nullable();
            $table->string('qb_sync_date')->nullable();
            $table->string('qb')->nullable();
            $table->string('is_active')->nullable();
            $table->string('last_updateby')->nullable();
            $table->string('last_update')->nullable();
            $table->string('lead_appt_sold')->nullable();
            $table->string('exported_to_guild_quality')->nullable();
            $table->string('job_site_name')->nullable();
            $table->string('qbweb')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
