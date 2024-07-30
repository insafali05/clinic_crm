<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('contact_number');
            $table->string('contact_number_alternative')->nullable();
            $table->string('password');
            $table->string('address');
            $table->foreignId('branch_id')->constrained('branches');
            $table->string('photo')->nullable();
            $table->string('adhar_card')->nullable();
            $table->string('certificate')->nullable();
            $table->foreignId('clinicadmin_id')->constrained('clinic_admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
