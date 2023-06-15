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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('price');
            $table->string('image');


            $table->unsignedBigInteger('category_id')->nullable();

            $table->index('category_id', 'item_category_idx');

            $table->foreign('category_id', 'item_category_fk')->on('categories')->references('id');

            $table->unsignedBigInteger('user_id')->nullable();

            $table->index('user_id', 'user_category_idx');

            $table->foreign('user_id', 'user_category_fk')->on('users')->references('id');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
