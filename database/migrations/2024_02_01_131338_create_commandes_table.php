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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_profile');
            $table->unsignedBigInteger('id_reward');
            $table->foreign("id_profile")->references("id")->on("profiles")->cascadeOnDelete();
            $table->foreign("id_reward")->references("id")->on("rewards")->cascadeOnDelete();
            $table->date("expiration");
            $table->string('code');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
