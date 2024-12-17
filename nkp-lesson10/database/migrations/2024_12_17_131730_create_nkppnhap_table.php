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
        Schema::create('nkppnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nkpSoPN')->primary();
            $table->date('nkpNgayNhap');
            $table->string('nkpSoDH');
            // foreign
            $table->foreign('nkpSoDH')->references('nkpSoDH')->on('nkpdondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkppnhap');
    }
};
