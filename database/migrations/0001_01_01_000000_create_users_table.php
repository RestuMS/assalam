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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('kewarganegaraan', ['wni', 'wna']);
            $table->string('tempat')->nullable();
            $table->date('ttl')->nullable();
            $table->enum('gender', ['lakilaki', 'perempuan']);
            $table->enum('agama', ['islam', 'kristen', 'hindu', 'konghucu', 'budha', 'katolik']);
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->integer('rtrw')->nullable();
            $table->integer('kodepos')->nullable();
            $table->integer('hp')->nullable();
            $table->enum('status', ['single', 'menikah']);
            $table->integer('telp')->nullable();
            $table->integer('jmltangguangan')->nullable();
            $table->integer('pendapatanperbulan')->nullable();
            $table->integer('pengusahakenapajak')->nullable();
            $table->integer('npwp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
