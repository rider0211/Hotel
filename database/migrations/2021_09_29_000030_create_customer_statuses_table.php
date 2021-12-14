<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('customer_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cs_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
