<?php

use App\Models\Gym;
use App\Models\Section;
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
        Schema::create('gym_sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Gym::class)->constrained();;
            $table->foreignIdFor(Section::class)->constrained();;
            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_sections');
    }
};