<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinalocInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minaloc_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('citizen_id')->unsigned();
            $table->foreign('citizen_id')->references('id')->on('citizens')->onDelete('cascade');
            $table->enum('marriage', ['married', 'single', 'divorced', 'widower'])->default('single');
            $table->enum('life', ['alive', 'not_alive'])->default('alive');
            $table->enum('criminalstatus', ['jailtime', 'no_jailtime'])->default('no_jailtime');
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
        Schema::dropIfExists('minaloc_info');
    }
}
