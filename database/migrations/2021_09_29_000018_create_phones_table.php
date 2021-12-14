<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ms_phone_type_name')->nullable();
            $table->string('primary_phone_type');
            $table->string('primary_phone')->nullable();
            $table->string('phone_contact')->nullable();
            $table->string('primary_ext')->nullable();
            $table->boolean('primary_dnc')->default(0)->nullable();
            $table->boolean('primary_dnt')->default(0)->nullable();
            $table->string('phone')->nullable();
            $table->string('ms_access_company')->nullable();
            $table->string('ms_phone_type')->nullable();
            $table->string('ms_phone_cty_code')->nullable();
            $table->string('ms_phone_area_code')->nullable();
            $table->string('ms_phone_number')->nullable();
            $table->string('ms_primary_phone_type')->nullable();
            $table->string('ms_phone_dnc')->nullable();
            $table->string('ms_phone_fed_do_not_call')->nullable();
            $table->string('ms_phone_state_do_not_call')->nullable();
            $table->string('ms_written_permission_dnc')->nullable();
            $table->datetime('ms_phone_dnc_exempt_date')->nullable();
            $table->string('ms_phone_dnc_exempt')->nullable();
            $table->string('ms_phone_house_do_not_call')->nullable();
            $table->string('ms_phone_description')->nullable();
            $table->string('ms_phone_ext')->nullable();
            $table->string('ms_phone_do_not_fax')->nullable();
            $table->string('ms_is_active')->nullable();
            $table->string('last_updateby_user')->nullable();
            $table->string('ms_last_update')->nullable();
            $table->string('ms_phonenumbersearch')->nullable();
            $table->string('ms_phonenumberexcludingareacodesearch')->nullable();
            $table->string('ms_phone_dnt')->nullable();
            $table->string('ms_phone_dnt_texting_opt_out')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
