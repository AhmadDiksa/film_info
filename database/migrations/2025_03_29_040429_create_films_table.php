<?php
# Ahmad Diksa Sumadiono
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('genre');
            $table->string('director');
            $table->integer('release_year');
            $table->decimal('rating');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('films');
    }
};
