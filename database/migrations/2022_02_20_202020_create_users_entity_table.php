<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_entity', function (Blueprint $table) {
            $table->id('guid');
            $table->integer('role_id');
            $table->string('name');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('country_code');
            $table->string('phone');
            $table->string('profile');
            $table->string('password');
            $table->integer('is_active');
            $table->integer('added_by');
            $table->integer('aflogin_change_password');
            $table->timestamp('last_login_at');
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
        Schema::dropIfExists('users_entity');
    }
};
