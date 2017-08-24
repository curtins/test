<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->datetime('expire_date')->default(\Carbon\Carbon::now()) ;
            $table->string('property_address')  ;
            $table->string('property_state')   ;
            $table->string('zip')   ;
            $table->string('telephone')   ;            
            $table->datetime('date_changed')->default(\Carbon\Carbon::now()) ;
            $table->string('active')->default('N') ;     
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
