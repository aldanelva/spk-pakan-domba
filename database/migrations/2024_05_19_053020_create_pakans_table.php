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
        Schema::create('pakans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alternatif')->unique();
            $table->string('jenis_pakan');
            $table->float('serat');
            $table->float('lemak');
            $table->float('abu');
            $table->float('protein');
            $table->string('harga');
            $table->string('jarak');
            $table->string('ketersediaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakans');
    }
};
