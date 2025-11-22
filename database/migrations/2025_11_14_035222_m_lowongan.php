<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_lowongan', function (Blueprint $table) {
            $table->id('lowongan_id');
            $table->unsignedBigInteger('dept_id')->index();
            $table->string('posisi',255);
            $table->unsignedBigInteger('quota');
            $table->string('deskripsi');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('update_at')->nullable();
            $table->string('user_create')->nullable();
            $table->string('user_update')->nullable();
            $table->foreign('dept_id')->references('department_id')->on('m_department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('m_lowongan');
    }
};
