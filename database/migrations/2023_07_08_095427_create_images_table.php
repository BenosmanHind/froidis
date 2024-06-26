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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actualite_id')->unsigned()->nullable();
            $table->unsignedBigInteger('project_id')->unsigned()->nullable();
            $table->string('link');
            $table->integer('type');
            $table->string('slug')->nullable();
            $table->tinyInteger('flag')->nullable();
            $table->foreign('actualite_id')->references('id')->on('actualites')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
