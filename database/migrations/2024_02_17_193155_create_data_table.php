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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('code')->unique();
            $table->string('name')->default('');
            $table->string('level1')->default('');
            $table->string('level2')->default('');
            $table->string('level3')->default('');
            $table->string('price')->default('');
            $table->string('price_sp')->default('');
            $table->string('qnty')->default('');
            $table->mediumText('property_fields');
            $table->string('tbuy')->default('');
            $table->string('unit')->default('');
            $table->string('pic')->default('');
            $table->boolean('display_on_main')->default(0);
            $table->mediumText('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
