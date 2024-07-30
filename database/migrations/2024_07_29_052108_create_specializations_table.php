<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializationsTable extends Migration
{
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('clinicadmin_id');
            $table->timestamps();

            $table->foreign('clinicadmin_id')->references('id')->on('clinic_admins')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('specializations');
    }
}
