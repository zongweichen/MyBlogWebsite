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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // 文章標題
            $table->text('content'); // 儲存 Markdown 內容
            $table->string('slug')->unique(); // SEO 友善網址，可以幫助讓瀏覽器更好搜尋，不用slug就可以會用id來取代，ex: /posts/1, /posts/slug
            $table->timestamp('published_at')->nullable(); // 發佈時間，可為 NULL（草稿）
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
