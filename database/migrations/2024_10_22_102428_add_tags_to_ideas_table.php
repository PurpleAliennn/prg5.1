<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('ideas', function (Blueprint $table) {
            $table->foreignId('tag_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tags');

        Schema::table('ideas', function (Blueprint $table) {
            $table->dropConstrainedForeignId('tag_id');
        });
    }
};
