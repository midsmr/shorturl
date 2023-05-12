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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->default(1000)->constrained();
            $table->string('email')->unique();
            $table->string('password')
                ->default('$2y$10$atSHnPE49NYGCOV/JnSM2.moXWSE0s06NvYMT3O6cEMc7X1PtN1zS');
            $table->unsignedBigInteger('balance')->default(0);
            $table->rememberToken();
            $table->longText('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
