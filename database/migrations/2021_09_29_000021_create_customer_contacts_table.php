<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerContactsTable extends Migration
{
    public function up()
    {
        Schema::create('customer_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ms_cust')->nullable();
            $table->string('id_cust_status')->nullable();
            $table->string('cust_comp')->nullable();
            $table->string('cust_comid')->nullable();
            $table->string('cust_fullname')->nullable();
            $table->string('cust_title')->nullable();
            $table->string('cust_vet')->nullable();
            $table->string('cust_email')->nullable();
            $table->string('ms_primary_email')->nullable();
            $table->string('ms_secondary_email')->nullable();
            $table->string('cust_email_2')->nullable();
            $table->string('cust_phone')->nullable();
            $table->string('cust_phone_2')->nullable();
            $table->string('ms_phone')->nullable();
            $table->string('cust_fax')->nullable();
            $table->string('ms_address')->nullable();
            $table->string('cust_address')->nullable();
            $table->string('cust_route')->nullable();
            $table->string('cust_city')->nullable();
            $table->string('cust_state')->nullable();
            $table->string('cust_zip')->nullable();
            $table->string('cust_county')->nullable();
            $table->string('cust_lat')->nullable();
            $table->string('cust_lon')->nullable();
            $table->string('cust_note')->nullable();
            $table->string('cust_background')->nullable();
            $table->string('ms_qb_sync_date')->nullable();
            $table->string('ms_qb')->nullable();
            $table->string('ms_qb_editsequence')->nullable();
            $table->string('ms_qb_sync')->nullable();
            $table->string('ms_qb_name')->nullable();
            $table->string('ms_qbweb')->nullable();
            $table->string('ms_created_by')->nullable();
            $table->integer('cust_created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
