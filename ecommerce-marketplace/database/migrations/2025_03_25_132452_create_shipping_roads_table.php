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
        Schema::create('shipping_roads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipping_id')->index();
            $table->text('information')->nullable();
            $table->timestamps();

            $table->foreign('shipping_id')
                ->references('id')
                ->on('shippings')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_roads');
    }
};
