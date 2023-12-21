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
            $table->bigInteger('hris')->unique();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('position')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('employment_stat')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('status')->default(false);
            $table->binary('photo')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Foreign key
            $table->foreignId('office_id')
                    ->nullable()
                    ->constrained(table:'offices')
                    ->onUpdate('cascade')
                    ->nullOnDelete('cascade');
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
