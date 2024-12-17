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
        Schema::create('nkpctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nkpSoPN');
            $table->string('nkpMaVTu');
            $table->integer('nkpSlNhap');
            $table->float('nkpDgNhap');
            // Primary 
            $table->primary(['nkpSoPN','nkpMaVTu']);
            // foreign key 
            $table->foreign('nkpSoPN')->references('nkpSoPN')->on('nkppnhap');
            $table->foreign('nkpMaVTu')->references('nkpMaVTu')->on('nkpvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkpctpnhap');
    }
};
