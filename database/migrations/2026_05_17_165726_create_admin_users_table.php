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
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id();

            $table->string('username', 32)->unique();
            $table->string('email', 64)->unique();
            $table->string('password');

            $table->timestamp('last_logon')->nullable();
            $table->integer('no_logon')->default(0);

            $table->string('name')->nullable();
            // $table->string('lname')->nullable();

            $table->text('address')->nullable();

            $table->tinyInteger('usertype')->default(0);

            $table->string('image')->nullable();

            $table->timestamp('added_on')->nullable();
            $table->timestamp('modified_on')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_users');
    }
};