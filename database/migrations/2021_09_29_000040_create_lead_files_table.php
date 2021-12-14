<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadFilesTable extends Migration
{
    public function up()
    {
        Schema::create('lead_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jfile_title');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
