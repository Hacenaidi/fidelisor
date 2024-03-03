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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_profile');
            $table->unsignedBigInteger('id_variation');
            $table->foreign("id_profile")->references("id")->on("profiles")->cascadeOnDelete();
            $table->foreign("id_variation")->references("id")->on("variations")->cascadeOnDelete();
            $table->integer("quantite");
            $table->float("total_price");
            $table->string('code',10);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
