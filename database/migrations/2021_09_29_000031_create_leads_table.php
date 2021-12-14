<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('email_2')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->longText('description')->nullable();
            $table->string('homephone')->nullable();
            $table->string('goog_address')->nullable();
            $table->string('lead_lon')->nullable();
            $table->string('lead_lat')->nullable();
            $table->string('lead_street')->nullable();
            $table->string('lead_lot')->nullable();
            $table->string('lead_city')->nullable();
            $table->string('lead_state')->nullable();
            $table->string('lead_zip')->nullable();
            $table->string('lead_county')->nullable();
            $table->string('dateassigned')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
