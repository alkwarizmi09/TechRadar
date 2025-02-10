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
        Schema::create('technologies', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->char('company_id', 26);
            $table->char('category_id', 26);
            $table->char('user_id', 26);
            $table->string('name');
            $table->longText('description')->nullable();
            $table->boolean('is_new')->default(false);
            $table->enum('quadrant', ['Techniques', 'Platforms', 'Tools', 'Language and Framework']);
            $table->enum('ring', ['HOLD', 'ADOPT', 'ASSESS', 'TRIAL']);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
