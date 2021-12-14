<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorFilesTable extends Migration
{
    public function up()
    {
        Schema::create('vendor_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vfile_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
