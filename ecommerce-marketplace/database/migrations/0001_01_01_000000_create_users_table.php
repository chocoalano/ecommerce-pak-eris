<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Users Table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number', 20)->nullable(); // Limited length to 20 for better standardization
            $table->enum('type', ['buyer', 'seller', 'admin'])->default('buyer');
            $table->string('profile_picture')->nullable();
            $table->decimal('ewallet_balance', 12, 2)->default(0.00);
            $table->boolean('activation')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        // Password Reset Tokens Table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Sessions Table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('ip_address', 45)->nullable(); // Supports IPv4 and IPv6
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // E-Wallet Transactions Table
        Schema::create('ewallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('transaction_type', ['credit', 'debit']);
            $table->decimal('amount', 12, 2);
            $table->decimal('balance', 12, 2);
            $table->timestamp('transaction_at')->nullable();
            $table->timestamps();
        });

        // Sellers Table
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('store_name', 150)->unique();
            $table->text('description');
            $table->string('logo')->nullable();
            $table->text('store_address');
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->enum('store_status', ['active', 'suspended'])->default('active');
            $table->enum('store_type',['electronic', 'grocery', 'fashion', 'property'])->default('electronic');
            $table->time('store_time_opened')->default(Carbon::now()->format('H:i:s'));
            $table->time('store_time_closed')->default(Carbon::now()->format('H:i:s'));
            $table->timestamps();
        });

        // Product Categories Table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('slug')->unique();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('name', 100)->unique();
            $table->string('slug')->unique();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
        // Products Table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('sellers')->cascadeOnDelete();
            $table->string('name');
            $table->enum('type',['electronic', 'grocery', 'fashion', 'property'])->default('electronic');
            $table->string('brand')->nullable();
            $table->string('slug')->unique(); // Ensure unique slugs for SEO
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->decimal('discount', 12, 2);
            $table->integer('stock')->default(0);
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('payment_availablelity', ['credit_card', 'bank_transfer', 'e-wallet', 'cod'])->default('credit_card');
            $table->bigInteger('promotion_set')->default(0);
            $table->bigInteger('promotion_get')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('product_category_links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->constrained();
            $table->bigInteger('product_id')->constrained();
            $table->unique(['category_id', 'product_id'], 'category_product_unique');
        });
        Schema::create('product_subcategory_links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subcategory_id')->constrained();
            $table->bigInteger('product_id')->constrained();
            $table->unique(['subcategory_id', 'product_id'], 'category_product_unique');
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->morphs('related');
            $table->timestamps();
        });

        // Payments Table
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable();
            $table->enum('payment_method', ['credit_card', 'bank_transfer', 'e-wallet', 'cod'])->default('credit_card');
            $table->enum('payment_status', ['pending', 'success', 'failed'])->default('pending');
            $table->dateTime('payment_date')->nullable();
            $table->decimal('amount_paid', 12, 2);
            $table->timestamps();
            $table->softDeletes();
        });

        // Orders Table
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('payment_id')->constrained('payments')->cascadeOnDelete();
            $table->decimal('total_price', 12, 2);
            $table->enum('status', ['pending', 'paid', 'shipped', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });

        // Order Items Table
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->integer('qty');
            $table->decimal('item_price', 12, 2);
            $table->decimal('total_price', 12, 2);
            $table->timestamps();
            $table->softDeletes();
        });

        // Reviews Table
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->morphs('related');
            $table->foreignId('buyer_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('rating', 3, 2);
            $table->text('review_text');
            $table->timestamps();
        });

        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('hexcode')->unique();
            $table->string('colorname')->unique();
        });

        Schema::create('product_color', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('color_id')->constrained();
            $table->bigInteger('product_id')->constrained();
            $table->unique(['color_id', 'product_id'], 'color_product_unique');
        });

        // Carts Table
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('total_price', 12, 2)->default(0.00);
            $table->timestamps();
        });

        // Cart Items Table
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->integer('qty')->default(1);
            $table->timestamps();
        });

        // Shippings Table
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->text('shipping_address');
            $table->enum('shipping_status', ['pending', 'shipped', 'delivered', 'failed'])->default('pending');
            $table->dateTime('shipping_date');
            $table->string('tracking_number', 100)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
        Schema::dropIfExists('product_color');
        Schema::dropIfExists('shippings');
        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('product_category_links');
        Schema::dropIfExists('product_subcategory_links');
        Schema::dropIfExists('products');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('images');
        Schema::dropIfExists('sellers');
        Schema::dropIfExists('ewallet_transactions');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
