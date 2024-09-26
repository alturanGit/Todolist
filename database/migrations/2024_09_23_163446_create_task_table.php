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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Автоинкрементный идентификатор
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Внешний ключ для пользователей
            $table->string('title'); // Заголовок задачи
            $table->text('description')->nullable(); // Описание задачи 
            $table->enum('status', ['pending', 'completed'])->default('pending'); // Статус задачи
            $table->timestamps(); // Дата создания и обновления
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
