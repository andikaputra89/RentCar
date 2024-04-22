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
        Schema::create('Varian', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobil');
            $table->string('harga_driver')->default(0);
            $table->string('harga_hanya_mobil')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
