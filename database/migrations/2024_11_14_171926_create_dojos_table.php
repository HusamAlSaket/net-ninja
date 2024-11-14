<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dojos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');  // Changed to TEXT for larger description
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dojos');
    }
};
