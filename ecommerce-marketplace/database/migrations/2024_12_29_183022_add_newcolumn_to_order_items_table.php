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
        Schema::table('order_items', function (Blueprint $table) {
            $table->decimal('total_weight', 10,2)->default(0.00)->after('total_price');
            $table->string('province_store', 100)->after('total_weight');
            $table->string('city_store', 100)->after('province_store');
            $table->integer('province_id_ro_shipping', 10)->after('city_store');
            $table->integer('city_id_ro_shipping', 10)->after('province_id_ro_shipping');
            $table->string('courier_ro_shipping', 100)->after('city_id_ro_shipping');
            $table->string('packet_ro_shipping', 100)->after('courier_ro_shipping');
            $table->string('cost_ro_shipping', 100)->after('packet_ro_shipping');
            $table->json('list_ro_shipping_option')->after('cost_ro_shipping');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn('order_items');
            $table->dropColumn('total_weight');
            $table->dropColumn('province_store');
            $table->dropColumn('city_store');
            $table->dropColumn('province_id_ro_shipping');
            $table->dropColumn('city_id_ro_shipping');
            $table->dropColumn('courier_ro_shipping');
            $table->dropColumn('packet_ro_shipping');
            $table->dropColumn('cost_ro_shipping');
            $table->dropColumn('list_ro_shipping_option');
        });
    }
};
