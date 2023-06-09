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
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('Title');
        $table->string('Content', 1024);
        $table->string('ImageURL');
        $table->timestamps();

        $table->unsignedBigInteger('newsletter_id');
            $table->foreign('newsletter_id')->references('id')->on('newsletters')->onDelete('cascade');
        });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
