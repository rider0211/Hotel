<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityReferencesTable extends Migration
{
    public function up()
    {
        Schema::create('activity_references', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('act_notes')->nullable();
            $table->datetime('act_due_by')->nullable();
            $table->string('refer_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
