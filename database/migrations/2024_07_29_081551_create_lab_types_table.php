<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabTypesTable extends Migration
{
    public function up()
    {
        Schema::create('lab_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('clinicadmin_id');
            $table->timestamps();

            $table->foreign('clinicadmin_id')->references('id')->on('clinic_admins')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lab_types');
    }
}
