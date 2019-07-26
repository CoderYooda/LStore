<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->integer('language_id')->default(1);
            $table->integer('name')->nullable();
            $table->integer('description')->nullable();
            $table->integer('tag')->nullable();
            $table->integer('meta_title')->nullable();
            $table->integer('meta_description')->nullable();
            $table->integer('meta_keyword')->nullable();
            $table->integer('meta_h1')->nullable();
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
        Schema::dropIfExists('product_descriptions');
    }
}
