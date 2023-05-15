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
        Schema::create('urls', function (Blueprint $table) {
            $table->id()->startingValue(10000);
            $table->foreignId('app_id')->constrained();
            $table->longText('original')->comment('原始地址');
            $table->unsignedBigInteger('user_view');
            $table->unsignedBigInteger('page_view');
            $table->unsignedBigInteger('pc');
            $table->unsignedBigInteger('mobile');
            $table->unsignedBigInteger('unknown');
            $table->integer('status')->default(\App\Enums\UrlStatus::Active->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urls');
    }
};
