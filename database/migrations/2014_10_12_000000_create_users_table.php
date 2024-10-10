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
            $table->string('name',40)->nullable(false);
            $table->string('second_name',50)->nullable(false);
            $table->string('email',30)->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255)->nullable(false);
            $table->string('phone',12)->unique();
            $table->string('address',80)->nullable(false);
            $table->integer('zip_code');
            $table->foreignId('company_id')->constrained('companies');
            $table->rememberToken();
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
