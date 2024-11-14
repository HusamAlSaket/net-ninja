<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ninjas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('bio');
            $table->integer('skill');
            $table->foreignId('dojo_id')->constrained('dojos')->onDelete('cascade');  // Foreign key referencing 'dojos'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ninjas');
    }
};
