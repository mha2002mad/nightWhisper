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
        Schema::create("messages", function (Blueprint $table) {
            $table->char("sentBy");
            $table->uuid("groupChatID");
            $table->longText("message");
            $table->timestamps();
            $table->foreign("groupChatID")
            ->references("groupChatID")
            ->on("groupChats")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists("messages");
    }
};
