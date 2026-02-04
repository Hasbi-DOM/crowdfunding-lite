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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('donatur_name');
            $table->timestamps();
            $table->foreignId('campaign_id')
                ->constrained('campaigns')
                ->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->string('image');
            $table->tinyInteger('is_verified')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
