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
        Schema::create('tiki', function (Blueprint $table) {
            $table -> increments('tiki_id');
            $table -> string('image');
            $table -> string('description');
            $table -> integer('price');
            $table -> string('address');
            $table -> string('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiki');
    }
};
