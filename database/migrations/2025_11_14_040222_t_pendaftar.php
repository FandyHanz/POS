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
        Schema::create('t_pendaftar', function (Blueprint $table) {
            $table->id('pendaftar_id');
            $table->unsignedBigInteger('lowongan_id')->index();
            $table->string('name', 100);
            $table->enum('gender',['male', 'female']);
            $table->date('DOB');
            $table->string('address', 100);
            $table->string('no_telp', 100);
            $table->string('university', 100);
            $table->string('major', 100);
            $table->decimal('IPK');
            $table->enum('status',['P', 'A', 'R'])->default('P');
            $table->string('path_cv', 255);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('update_at')->nullable();
            $table->foreign('lowongan_id')->references('lowongan_id')->on('m_lowongan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('t_pendaftar');
    }
};
