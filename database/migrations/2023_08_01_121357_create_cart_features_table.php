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
        Schema::create('cart_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('feature_value')->nullable();
            $table->foreignId('feature_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cart_features');
    }
};