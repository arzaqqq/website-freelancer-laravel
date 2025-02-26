<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
                 ->nullable()
                ->constrained('users')
                ->onDelete('cascade');

            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('delivery_time')->nullable();
            $table->integer('revision_limit')->nullable();
            $table->string('price')->nullable();
            $table->longText('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
