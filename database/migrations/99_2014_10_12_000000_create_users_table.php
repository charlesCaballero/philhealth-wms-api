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
            $table->string('hris')->unique();
            $table->string('user_id')->unique()->nullable();
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

        // // Add Spatie columns
        // Schema::create('model_has_roles', function (Blueprint $table) {
        //     $table->foreignId('role_id')->index();
        //     $table->morphs('model');
        // });

        // Schema::create('model_has_permissions', function (Blueprint $table) {
        //     $table->foreignId('permission_id')->index();
        //     $table->morphs('model');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('model_has_roles');
        // Schema::dropIfExists('model_has_permissions');
        Schema::dropIfExists('users');
    }
};
