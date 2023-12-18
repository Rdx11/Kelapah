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

        Schema::create('report', function (Blueprint $table) {
            $table->bigIncrements('id_report'); // Menggunakan bigIncrements
            $table->integer('id_user');
            $table->string('title', 255);
            $table->text('description');
            $table->string('attachment', 255);
            $table->integer('id_category');
            $table->string('location_report', 255);
            $table->string('status', 50);
            $table->date('date_report');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
