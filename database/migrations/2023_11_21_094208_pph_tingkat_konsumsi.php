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
        //
        Schema::create('pph_tingkat_konsumsis', function (Blueprint $table) {
            $table->id();
            $table->integer('code_province');
            $table->string('province_name');
            $table->integer('code_regency_city');
            $table->string('regency_name_city');
            $table->integer('number_score_pph');
            $table->string('unit');
            $table->string('year');
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
