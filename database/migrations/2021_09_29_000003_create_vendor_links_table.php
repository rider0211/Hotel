<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorLinksTable extends Migration
{
    public function up()
    {
        Schema::create('vendor_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ven_link')->nullable();
            $table->string('vlink_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
