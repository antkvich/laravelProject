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
        Schema::create('user_conversations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('conversation_id');

            $table->index('user_id', 'user_conversation_user_idx');
            $table->index('conversation_id', 'user_conversation_conversation_idx');

            $table->foreign('user_id', 'user_conversation_user_fk')->on('users')->references('id');
            $table->foreign('conversation_id', 'user_conversation_conversation_fk')->on('conversations')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_conversations');
    }
};
