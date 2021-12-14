<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToActivitiesTable extends Migration
{
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->foreign('lead_id', 'lead_fk_4969089')->references('id')->on('leads');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id', 'job_fk_4969090')->references('id')->on('jobs');
        });
    }
}
