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
            $table->string('name');
            $table->Integer('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role1')->nullable();
            $table->string('role2')->nullable();
            $table->string('role3')->nullable();
            $table->string('role4')->nullable();
            $table->string('img')->nullable();
            $table->string('bio')->nullable();
            $table->boolean('isAdmin')->default(false);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
