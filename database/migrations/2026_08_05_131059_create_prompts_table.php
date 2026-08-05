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
        Schema::create('prompts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();
            $table->text('content');
            $table->text('instructions')->nullable();
            $table->enum('output_type', array('text', 'json', 'html', 'image'))->default('text');
            $table->text('output_content');
            $table->text('thumbnail')->nullable();
            $table->integer('copy_count')->default(0);
            $table->tinyInteger('is_featured')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prompts');
    }
};
