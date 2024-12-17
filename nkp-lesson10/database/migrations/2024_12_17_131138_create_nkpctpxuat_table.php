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
        Schema::create('nkpctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nkpSoPX');
            $table->string('nkpMaVTu');
            $table->integer('nkpSlXuat');
            $table->float('nkpDgXuat');
            // Primary 
            $table->primary(['nkpSoPX','nkpMaVTu']);
            // foreign key 
            $table->foreign('nkpSoPX')->references('nkpSoPX')->on('nkppxuat');
            $table->foreign('nkpMaVTu')->references('nkpMaVTu')->on('nkpvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkpctpxuat');
    }
};
