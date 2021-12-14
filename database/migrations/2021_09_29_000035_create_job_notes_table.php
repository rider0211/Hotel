<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobNotesTable extends Migration
{
    public function up()
    {
        Schema::create('job_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('jnote')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
