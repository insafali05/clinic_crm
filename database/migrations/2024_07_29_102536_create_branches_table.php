<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name');
            $table->string('contact_number');
            $table->string('alternate_number')->nullable();
            $table->string('address');
            $table->string('password');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('clinicadmin_id');
            $table->foreign('clinicadmin_id')->references('id')->on('clinic_admins')->onDelete('cascade');
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
        Schema::dropIfExists('branches');
    }
}
