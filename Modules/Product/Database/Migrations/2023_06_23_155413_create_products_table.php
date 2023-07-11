<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('en_title')->nullable();
            $table->string('en_slug')->nullable();

            $table->boolean('is_active')->default(true);
//            $table->enum('status', EnumHelpers::$PlaceTypesEnum)->default('restaurant');
            $table->text('description');
            $table->integer('view_count')->default(0);
            $table->text('image');
            $table->string('price');
            $table->integer('quantity')->default(1);

            $table->string('barcode')->nullable();

            $table->string('discount_price')->nullable();
            $table->string('discount_start_date')->nullable();
            $table->string('discount_end_date')->nullable();
            $table->boolean('is_special')->default(false);

            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('color_id')->nullable()->constrained()->nullOnDelete()->nullOnDelete();
            $table->foreignId('size_id')->nullable()->constrained()->nullOnDelete()->nullOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained()->nullOnDelete()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
