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
        Schema::create('nkppxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nkpSoPX')->primary();
            $table->date('nkpNgayXuat');
            $table->string('nkpTenKH',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkppxuat');
    }
};
