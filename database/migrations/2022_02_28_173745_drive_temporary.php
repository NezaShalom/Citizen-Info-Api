<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DriveTemporary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drive_temporary_permit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('citizen_id')->unsigned();
            $table->foreign('citizen_id')->references('id')->on('citizens')->onDelete('cascade');
            $table->bigInteger('drivepermit_id');
            $table->string('drivepermit_reportedstatus');
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
        Schema::dropIfExists('drive_temporary_permit');
    }
}
