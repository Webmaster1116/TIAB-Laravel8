<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_id');
            $table->date('birthday');
            $table->string('state');
            $table->string('country');
            $table->string('referral_code');
            $table->string('hear');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('paypal')->nullable();
            $table->string('secret_question');
            $table->string('answer');
            $table->string('gst_registered')->nullable();
            $table->string('ABN')->nullable();
            $table->string('logo')->nullable();
            $table->string('download')->nullable();
            $table->string('role');
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
