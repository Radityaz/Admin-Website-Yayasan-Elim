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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('title', 300)->unique();
            $table->string('author', 100);
            $table->unsignedBigInteger('image_id')->nullable();
            $table->foreign('image_id')->references('id')->on('article_image')->onDelete('cascade');
            $table->text('content');
            $table->string('status');
            $table->string('date'); 
            $table->timestamps();
        });
        
    }

    // Schema::table('article', function (Blueprint $table) {
    //     $table->unsignedBigInteger('image_id')->nullable(); // Membuat kolom kunci asing nullable
    //     $table->foreign('image_id')->references('id')->on('article-image')->onDelete('set null'); // Menambahkan constraint foreign key
    // });

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
