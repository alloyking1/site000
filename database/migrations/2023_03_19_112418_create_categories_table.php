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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['title' => 'laravel', 'description' => ''],
            ['title' => 'php', 'description' => ''],
            ['title' => 'git', 'description' => ''],
            ['title' => 'alpineJs', 'description' => ''],
            ['title' => 'vueJS', 'description' => ''],
            ['title' => 'livewire', 'description' => ''],
            ['title' => 'alpineJs', 'description' => ''],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
