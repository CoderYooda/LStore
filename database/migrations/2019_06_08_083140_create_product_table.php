<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('model', 64)->nullable();
            $table->char('sku', 64)->nullable();
            $table->char('upc', 12)->nullable();
            $table->char('ean', 14)->nullable();
            $table->char('jan', 13)->nullable();
            $table->char('isbn', 17)->nullable();
            $table->char('mpn', 64)->nullable();
            $table->char('location', 128)->nullable();
            $table->integer('quantity')->unsigned()->default('0');
            $table->integer('stock_status_id')->unsigned()->nullable();
            $table->integer('image_id')->unsigned()->nullable();
            $table->integer('manufacturer_id')->unsigned()->nullable();
            $table->tinyInteger('shipping')->default(1);
            $table->decimal('price', 15,4)->default('0.0000');
            $table->integer('points')->unsigned()->default('0');
            $table->integer('tax_class_id')->unsigned()->nullable();
            $table->date('date_available')->nullable();
            $table->decimal('weight', 15,8)->default('0.00000000');
            $table->integer('weight_class_id')->default('0');
            $table->decimal('length', 15,8)->default('0.00000000');
            $table->decimal('width', 15,8)->default('0.00000000');
            $table->decimal('height', 15,8)->default('0.00000000');
            $table->integer('length_class_id')->default('0');
            $table->tinyInteger('subtract')->default(1);
            $table->integer('minimum')->default(1);
            $table->integer('sort_order')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->integer('viewed')->default('0');
            $table->integer('noindex')->nullable();
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
        Schema::dropIfExists('product');
    }
}
