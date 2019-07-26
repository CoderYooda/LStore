<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('supplierId')->unsigned()->comment('идентификатор бренда (линк к таблице suppliers)');
            $table->char('DataSupplierArticleNumber', 30)->comment('артикул в нормальном написании (со спецсимволами)');#TODO
            $table->char('ArticleStateDisplayValue', 255)->comment('статус изделия (Нормальный, Снят с производства и т. д.)');#TODO
            $table->char('Description', 255)->comment('дополнительное описание (примечание)');
            $table->boolean('FlagAccessory')->comment('является сопутствующим товаром?(true/false)');
            $table->boolean('FlagMaterialCertification')->comment('сертифицированное производство?(true/false)');
            $table->boolean('FlagRemanufactured')->comment('восстановленное изделие?(true/false)');
            $table->boolean('FlagSelfServicePacking')->comment('поставляется без упаковки?(true/false)');
            $table->char('FoundString')->comment('артикул в поисковом написании (без спецсимволов)');
            $table->boolean('HasAxle')->comment('имеет применимость в осях?(true/false)');
            $table->boolean('HasCommercialVehicle')->comment('имеет применимость в коммерческих ТС?(true/false)');
            $table->boolean('HasEngine')->comment('имеет применимость в двигателях?(true/false)');
            $table->boolean('HasLinkitems')->comment('имеет применимость?(true/false)');
            $table->boolean('HasMotorbike')->comment('имеет применимость в мототехнике?(true/false)');
            $table->boolean('HasPassengerCar')->comment('имеет применимость в легковых ТС?(true/false)');
            $table->text('NormalizedDescription')->comment('основное описание (наименование)');
            $table->integer('QuantityPerPackingUnit')->comment('количество в упаковке');
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
        Schema::dropIfExists('articles');
    }
}
