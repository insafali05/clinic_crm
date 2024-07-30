<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfrastructureTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infrastructure_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('clinicadmin_id');
            $table->timestamps();

            $table->foreign('clinicadmin_id')->references('id')->on('clinic_admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infrastructure_types');
    }
}
