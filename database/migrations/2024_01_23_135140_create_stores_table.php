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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string("nomStore",20);
            $table->string("location",50);
            $table->string("url",100);
            $table->string("countryCode",30);
            $table->mediumText("logo")->nullable();
            $table->integer("codeScurite")->nullable();
            $table->bigInteger("point")->nullable();
            $table->unsignedBigInteger("id_user");
            $table->integer('nb_scan');

            $table->foreign("id_user")->references("id")->on("users")->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
