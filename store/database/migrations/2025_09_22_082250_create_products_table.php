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
            $table->string('name');
            $table->unsignedBigInteger('category');
            $table->string('price');
            $table->string('quantity');
            $table->string('image');
            $table->string('discription');
           
           

                $table->foreign('category')
                  ->references('id') // References the 'id' column of the 'categories' table
                  ->on('categories') // In the 'categories' table
                  ->onDelete('cascade'); 
                  
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
