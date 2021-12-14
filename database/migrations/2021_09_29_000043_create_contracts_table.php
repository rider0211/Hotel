<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ctr_name')->nullable();
            $table->string('job')->nullable();
            $table->string('contract_date')->nullable();
            $table->string('contract_status')->nullable();
            $table->string('contract_date_complete')->nullable();
            $table->string('is_active')->nullable();
            $table->string('last_update')->nullable();
            $table->string('last_updateby')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
