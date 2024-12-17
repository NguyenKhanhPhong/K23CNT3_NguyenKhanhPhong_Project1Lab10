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
        Schema::create('nkpdondh', function (Blueprint $table) {
            // $table->id();
            $table->string('nkpSoDH')->primary();
            $table->date('nkpNgayDH');
            $table->string('nkpMaNCC');
            $table->foreign('nkpMaNCC')->references('nkpMaNCC')->on('nkpnhacc');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkpdondh');
    }
};
