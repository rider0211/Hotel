<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ms_user')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name')->nullable();
            $table->integer('user_company')->nullable();
            $table->integer('user_status')->nullable();
            $table->integer('user_role')->nullable();
            $table->integer('user_dept')->nullable();
            $table->integer('user_title')->nullable();
            $table->string('address')->nullable();
            $table->string('user_color')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('goog_pw')->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->datetime('two_factor_expires_at')->nullable();
            $table->boolean('two_factor')->default(0)->nullable();
            $table->string('two_factor_code')->nullable();
            $table->string('mobile')->nullable();
            $table->integer('ticketit_admin')->nullable();
            $table->string('ticketit_agent')->nullable();
            $table->boolean('ms_is_active')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
