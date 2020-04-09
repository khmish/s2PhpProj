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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('pic')->nullable();
            $table->integer('Gender')->default(1);
            $table->date('birth');
            $table->unsignedBigInteger('city');
            $table->unsignedBigInteger('qualification');
            $table->unsignedBigInteger('department');
            $table->string('experienceYears');
            $table->text('address')->nullable();
            $table->integer('active')->default(1);
            $table->integer('admin')->default(0);
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
