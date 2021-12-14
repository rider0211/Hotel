<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('lead_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lead_stat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
