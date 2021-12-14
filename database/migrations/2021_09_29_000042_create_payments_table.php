<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pay_amount')->nullable();
            $table->string('job')->nullable();
            $table->string('company')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('contract')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_description')->nullable();
            $table->string('payment_date_time')->nullable();
            $table->string('payment_cc_no')->nullable();
            $table->string('applies_to_contract')->nullable();
            $table->string('cashfinance')->nullable();
            $table->string('is_active')->nullable();
            $table->string('last_updateby')->nullable();
            $table->string('last_update')->nullable();
            $table->string('paysimple_payment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
