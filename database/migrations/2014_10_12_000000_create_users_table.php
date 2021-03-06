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
            $table->string('firstname');
            $table->string('email')->unique();
            $table->unsignedBigInteger("fonction_id");
            $table->foreign("fonction_id")->references("id")->on("fonctions");
            $table->unsignedBigInteger("role_id");
            $table->foreign("role_id")->references("id")->on("roles");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo');
            $table->text("description");
            $table->integer("check");
            $table->string('password');
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
