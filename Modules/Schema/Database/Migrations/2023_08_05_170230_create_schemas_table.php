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
        Schema::create('schemas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('schema_id');
            $table->string('schema_type');

            $table->enum('type', EnumHelpers::$GoogleShcemaEnum)->default('article');

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
        Schema::dropIfExists('schemas');
    }
};
