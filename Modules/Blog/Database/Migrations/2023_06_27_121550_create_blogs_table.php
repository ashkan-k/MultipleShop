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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('en_title')->nullable();
            $table->string('en_slug')->nullable();

            $table->text('text');
            $table->text('en_text')->nullable();
            $table->integer('like_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->text('image');
            $table->enum('status', EnumHelpers::$BlogStatusEnum)->default('draft');

            $table->enum('schema_type', EnumHelpers::$GoogleShcemaEnum)->nullable();

            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('blog_categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
};
