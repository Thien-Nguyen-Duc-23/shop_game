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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('library_id')->nullable();
            $table->bigInteger('group_product_id')->nullable();
            $table->bigInteger('cateogory_id')->nullable();
            $table->string('uri')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('buyer_warning')->nullable();
            $table->bigInteger('pricing')->default(0);
            $table->bigInteger('sale_pricing')->default(0);
            $table->bigInteger('card_pricing')->default(0);
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};