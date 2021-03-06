<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formcontacts', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("email", 150);
            $table->unsignedBigInteger("subject_id");
            $table->foreign("subject_id")->references("id")->on("subjects");
            $table->text("message");
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
        Schema::dropIfExists('formcontacts');
    }
}
