<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCustomerContactsTable extends Migration
{
    public function up()
    {
        Schema::table('customer_contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('cust_status_id');
            $table->foreign('cust_status_id', 'cust_status_fk_4971005')->references('id')->on('customer_statuses');
        });
    }
}
