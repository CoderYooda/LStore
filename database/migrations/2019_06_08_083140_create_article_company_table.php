<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('article', 64)->nullable();
            $table->char('in_code', 64)->nullable();
            $table->char('oem', 64)->nullable();
            $table->char('location', 128)->nullable();
            $table->integer('quantity')->unsigned()->default('0');
            $table->integer('stock_status_id')->unsigned()->nullable();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->boolean('shipping')->default(1);
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
            $table->boolean('subtract')->default(1);
            $table->integer('minimum')->default(1);
            $table->integer('minimum_stock')->default(1);
            $table->integer('sort_order')->default('0');
            $table->boolean('status')->default('0');
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
