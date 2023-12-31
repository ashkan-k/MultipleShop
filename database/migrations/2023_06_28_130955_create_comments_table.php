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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->text('negative_points')->nullable();
            $table->text('positive_points')->nullable();
            $table->integer('like_count')->nullable()->default(0);
            $table->enum('status', EnumHelpers::$CommentStatusEnum)->default('pending');
            $table->enum('suggest_score', EnumHelpers::$CommentSeggestToFriendEnum)->default('no_idea');

            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type');

            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('parent_id')->nullable()->constrained('comments')->cascadeOnUpdate()->nullOnDelete();

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
        Schema::dropIfExists('comments');
    }
};
