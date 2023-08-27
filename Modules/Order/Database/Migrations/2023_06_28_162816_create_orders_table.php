<?php

use App\Enums\EnumHelpers;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('order_number')->nullable();

            $table->string('amount')->default(0);

            $table->foreignId('delivery_method_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->enum('payment_type', EnumHelpers::$PaymentTypeEnum)->default('online');
            $table->enum('status', EnumHelpers::$OrderStatusEnum)->default('sending');

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
        Schema::dropIfExists('orders');
    }
};
