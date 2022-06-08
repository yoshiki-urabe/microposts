<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("favorites",function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("micropost_id");
            $table->timestamps();

            // 外部キー制約
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("micropost_id")->references("id")->on("microposts")->onDelete("cascade");
            //on以下修正
            $table->unique(["user_id","micropost_id"]);
        });
    }

    public function down()
    {
        Schema::dropIfExists("favorites");
    }
}
