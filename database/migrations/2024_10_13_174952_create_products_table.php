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
            $table->id();  // Auto-incrementing primary key
            $table->string('title');  // Product title
            $table->longText('description');  // Product description
            $table->string('image')->nullable();  // Image path (nullable)
            $table->decimal('price', 8, 2);  // Price field (max 8 digits, 2 decimal places)
            $table->integer('quantity');  // Quantity of the product
            $table->unsignedBigInteger('category_id');  // Foreign key reference to the category table

            // Add foreign key constraint to ensure category_id references the id column in categories table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
            $table->timestamps();  // Created and updated timestamp fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign key constraint
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        // Drop the 'products' table
        Schema::dropIfExists('products');
    }
};
