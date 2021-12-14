<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadNotesTable extends Migration
{
    public function up()
    {
        Schema::create('lead_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('lead_note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
