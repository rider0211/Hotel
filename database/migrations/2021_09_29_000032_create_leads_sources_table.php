<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsSourcesTable extends Migration
{
    public function up()
    {
        Schema::create('leads_sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
