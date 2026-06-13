<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('businesses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('business_name');

            $table->string('slug')->unique();

            $table->string('email')->nullable();

            $table->string('phone')->nullable();

            $table->text('description')->nullable();

            $table->string('logo')->nullable();

            $table->string('cover_image')->nullable();

            $table->text('address')->nullable();

            $table->string('city')->nullable();

            $table->string('state')->nullable();

            $table->string('country')->nullable();

            $table->string('zip_code')->nullable();

            $table->string('timezone')->default('Asia/Kolkata');

            $table->time('opening_time')->nullable();

            $table->time('closing_time')->nullable();

            $table->boolean('is_verified')->default(false);

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};