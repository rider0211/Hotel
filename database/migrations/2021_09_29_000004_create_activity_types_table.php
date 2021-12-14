<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTypesTable extends Migration
{
    public function up()
    {
        Schema::create('activity_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('act_type');
            $table->datetime('due_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
