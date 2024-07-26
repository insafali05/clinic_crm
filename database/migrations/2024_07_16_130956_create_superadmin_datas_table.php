<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperadminDatasTable extends Migration
{
    public function up()
    {
        Schema::create('superadmin_datas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('superadmin_id');
            $table->foreign('superadmin_id')->references('id')->on('superadmins')->onDelete('cascade');
            $table->string('firm_name');
            $table->string('email')->nullable();
            $table->string('phone_number')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('superadmin_datas');
    }
}
