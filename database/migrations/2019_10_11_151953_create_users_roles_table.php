<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('set null');
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
        //Schema::table('users_roles', function(Blueprint $table) {
          //$table->dropForeign(['user_id']);
          //$table->dropForeign(['role_id']);
        //});
        Schema::dropIfExists('users_roles');
    }
}
