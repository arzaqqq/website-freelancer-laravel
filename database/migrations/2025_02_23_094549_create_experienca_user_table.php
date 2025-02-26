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
        Schema::create('experienca_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_user_id')->nullable()->constrained('detail_user')->onDelete('cascade');
            $table->string('experienca')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experienca_user');
    }
};
