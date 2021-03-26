<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutwelcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutwelcomes', function (Blueprint $table) {
            $table->id();
            $table->text("para_right");
            $table->text("para_left");
            $table->string("btn_content");
            $table->string("btn_href");
            $table->string("img");
            $table->string("video_href");
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
        Schema::dropIfExists('aboutwelcomes');
    }
}
