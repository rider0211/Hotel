<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivingsTable extends Migration
{
    public function up()
    {
        Schema::create('receivings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rcv_vendor');
            $table->date('rcv_expected')->nullable();
            $table->date('rcv_received')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
