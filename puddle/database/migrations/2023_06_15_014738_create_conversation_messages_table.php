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
        Schema::create('conversation_messages', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->timestamps();

            $table->unsignedBigInteger('conversation_id');
            $table->index('conversation_id', 'conversation_conversation_message_idx');
            $table->foreign('conversation_id', 'conversation_conversation_message_fk')->on('conversations')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversation_messages');
    }
};
