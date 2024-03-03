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
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->string("name",50);
            $table->string("description",150)->nullable();;
            $table->integer("nbPoint");
            $table->date("validity");
            $table->integer("nb_quota");
            $table->integer("expiration");
            $table->mediumText("image")->nullable();
            $table->unsignedBigInteger('id_store');
            $table->foreign("id_store")->references("id")->on("stores")->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewards');
    }
};
