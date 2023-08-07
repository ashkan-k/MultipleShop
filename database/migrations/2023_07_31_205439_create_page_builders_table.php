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
        Schema::create('page_builders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('en_title');
            $table->string('slug')->nullable();
            $table->string('en_slug')->nullable();
            $table->text('body')->nullable();
            $table->text('en_body')->nullable();
            $table->string('icon_name')->nullable();
            $table->text('image')->nullable();
            $table->enum('schema_type', EnumHelpers::$PageGoogleShcemaEnum)->nullable();
            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('page_builders');
    }
};
