<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_description', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('meta_title', 255);
            $table->text('meta_description');
            $table->string('meta_keyword', 255);
            $table->string('meta_h1', 255);
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
        Schema::dropIfExists('category_descriptions');
    }
}
