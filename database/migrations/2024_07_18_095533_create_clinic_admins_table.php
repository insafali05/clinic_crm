<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('clinic_admins', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_name');
            $table->integer('number_of_branches');
            $table->string('contact_number');
            $table->string('alternative_contact_number')->nullable();
            $table->string('address');
            $table->string('password');
            $table->decimal('payment', 8, 2);
            $table->dateTime('payment_date_time');
            $table->string('payment_mode');
            $table->string('license_key')->unique();
            $table->dateTime('start_date_time');
            $table->dateTime('expiry_date_time');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clinic_admins');
    }
}
