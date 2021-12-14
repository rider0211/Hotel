<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityResultsTable extends Migration
{
    public function up()
    {
        Schema::create('activity_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('result')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
