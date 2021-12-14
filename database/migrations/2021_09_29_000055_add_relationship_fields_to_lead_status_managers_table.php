<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLeadStatusManagersTable extends Migration
{
    public function up()
    {
        Schema::table('lead_status_managers', function (Blueprint $table) {
            $table->unsignedBigInteger('lead_status_id');
            $table->foreign('lead_status_id', 'lead_status_fk_4968489')->references('id')->on('lead_statuses');
        });
    }
}
