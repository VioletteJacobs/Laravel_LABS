<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("firstname");
            $table->string("photo")->nullable();
            $table->text("content");
            $table->string("email");
            $table->unsignedBigInteger("post_id");
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade")->nullable();
            $table->integer("check");
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
        Schema::dropIfExists('comments');
    }
}
