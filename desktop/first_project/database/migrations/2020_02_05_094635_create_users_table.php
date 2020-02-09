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

                  $table->bigIncrements('id');
                  $table->string('name');
                  $table->string('email')->unique();
                  $table->string('phone_num')->unique();
                  $table->string('image')->nullable();
                  $table->string('country');
                   $table->enum('gender',['male','female']);
                  $table->string('password');
                   $table->enum('role' , ['admin','user'])->default('user');
                  $table->boolean('is_active')->defualt(1);
                  $table->timestamp('email_verified_at')->nullable();

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
