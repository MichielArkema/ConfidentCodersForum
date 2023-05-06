<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->foreignId("user_id")->references("id")->on("users")->cascadeOnDelete();
            $table->string("display_name", 100);
            $table->string("bio", 1500)->default("");
            $table->text("thumbnail_path")->nullable();
            $table->string("location", 100)->nullable();
            $table->string("occupation", 100)->nullable();
            $table->string("website", 500)->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
};
