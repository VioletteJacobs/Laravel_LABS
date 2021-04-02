<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendmails', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->unsignedBigInteger("subject_id");
            $table->foreign("subject_id")->references("id")->on("subjects");
            $table->string("message");
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
        Schema::dropIfExists('sendmails');
    }
}
