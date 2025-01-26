<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->string('password');
            $table->enum('binusian_status', ['Binusian', 'Non-Binusian']);
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('whatsapp');
            $table->string('line_id')->unique();
            $table->string('github_id');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('cv');
            $table->string('id_card');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
