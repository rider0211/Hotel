<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPartsOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('parts_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('realed_job_id');
            $table->foreign('realed_job_id', 'realed_job_fk_4963839')->references('id')->on('jobs');
        });
    }
}
