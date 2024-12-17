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
        Schema::create('nkpctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nkpSoDH');
            $table->string('nkpMaVTu');
            $table->integer('nkpS1Dat');
            // tạo kháo chính trên 2 cột (nkpSoDH, nkpMaVTu)
            $table->primary(['nkpSoDH','nkpMaVTu']);
            // khóa ngoại 
            $table->foreign('nkpSoDH')->references('nkpSoDH')->on('nkpdondh');
            $table->foreign('nkpMaVTu')->references('nkpMaVTu')->on('nkpvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkpctdondh');

    }
};
