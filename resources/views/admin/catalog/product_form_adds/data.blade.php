
<div class="box mb-0">
    <div class="box-body">
        <div class="form-group row">
            <label for="input-model" class="col-sm-2 col-form-label">Код товара</label>
            <div class="col-sm-10">
                <input type="text" name="model"
                       class="form-control" id="input-model"
                       placeholder="Код товара">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-sku" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-10">
                <input type="text" name="sku"
                       class="form-control" id="input-sku"
                       placeholder="SKU - код производителя">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-upc" class="col-sm-2 col-form-label">UPC</label>
            <div class="col-sm-10">
                <input type="text" name="upc"
                       class="form-control" id="input-upc"
                       placeholder="UPC - Универсальный код товара">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-ean" class="col-sm-2 col-form-label">EAN</label>
            <div class="col-sm-10">
                <input type="text" name="ean"
                       class="form-control" id="input-ean"
                       placeholder="EAN - Европейский код товара">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-jan" class="col-sm-2 col-form-label">JAN</label>
            <div class="col-sm-10">
                <input type="text" name="jan"
                       class="form-control" id="input-jan"
                       placeholder="JAN - Японский код товара">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-isbn" class="col-sm-2 col-form-label">ISBN</label>
            <div class="col-sm-10">
                <input type="text" name="isbn"
                       class="form-control" id="input-isbn"
                       placeholder="ISBN - Международный стандартный книжный номер">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-mpn" class="col-sm-2 col-form-label">MPN</label>
            <div class="col-sm-10">
                <input type="text" name="mpn"
                       class="form-control" id="input-mpn"
                       placeholder="MPN - Код партии товара производителя">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-location" class="col-sm-2 col-form-label">Расположение</label>
            <div class="col-sm-10">
                <input type="text" name="location"
                       class="form-control" id="input-location"
                       placeholder="Расположение">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-price" class="col-sm-2 col-form-label">Цена</label>
            <div class="col-sm-10">
                <input type="number" name="price"
                       class="form-control" id="input-price"
                       placeholder="Цена">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-tax-class" class="col-sm-2 col-form-label">Класс налога</label>
            <div class="col-sm-10">
                <select id="input-tax-class" name="tax_class_id" class="form-control input-c">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-quantity" class="col-sm-2 col-form-label">Количество</label>
            <div class="col-sm-10">
                <input type="number" name="quantity"
                       class="form-control" id="input-quantity"
                       placeholder="Количество">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-minimum" class="col-sm-2 col-form-label">Минимум</label>
            <div class="col-sm-10">
                <input type="number" name="minimum"
                       class="form-control" id="input-minimum"
                       placeholder="Минимальное количество">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-subtract" class="col-sm-2 col-form-label">Вычитать со склада</label>
            <input type="hidden" name="subtract" value="0">
            <div class="col-sm-10">
                <label class="ui-switch ui-switch-md info m-t-xs">
                    <input id="input-subtract" name="subtract" value="1" type="checkbox" checked>
                    <i class="blue"></i>
                </label>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-stock-status" class="col-sm-2 col-form-label">При отсутствии</label>
            <div class="col-sm-10">
                <select id="input-stock-status" name="stock_status_id" class="form-control input-c">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-shipping" class="col-sm-2 col-form-label">Только доставка</label>
            <input type="hidden" name="shipping" value="0">
            <div class="col-sm-10">
                <label class="ui-switch ui-switch-md info m-t-xs">
                    <input id="input-shipping" name="shipping" value="1" type="checkbox" checked>
                    <i class="blue"></i>
                </label>
            </div>
        </div>
        <div class="form-group row" id="available_container" style="position: relative;">
            <label for="input-date-available" class="col-sm-2 col-form-label">Дата поступления</label>
            <div class="col-sm-10">
                <input id="input-date-available" name="date_available" type='text' class="form-control mb-3" data-plugin="datepicker"
                       data-option="{autoclose: true, language: 'ru', container:'#available_container'}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Размеры (Д х Ш х В)</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-4">
                        <input name="length" type="number" class="form-control" placeholder="Длинна">
                    </div>
                    <div class="col-md-4">
                        <input name="width" type="number" class="form-control" placeholder="Ширина">
                    </div>
                    <div class="col-md-4">
                        <input name="height" type="number" class="form-control" placeholder="Высота">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-length-class" class="col-sm-2 col-form-label">Единица длинны</label>
            <div class="col-sm-10">
                <select id="input-length-class" name="length_class_id" class="form-control input-c">
                    <option value="1">Сантиметр</option>
                    <option value="2">Метр</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-weight" class="col-sm-2 col-form-label">Вес</label>
            <div class="col-sm-10">
                <input type="number" name="weight"
                       class="form-control" id="input-weight"
                       placeholder="Вес">
            </div>
        </div>
        <div class="form-group row">
            <label for="input-weight-class" class="col-sm-2 col-form-label">Единица веса</label>
            <div class="col-sm-10">
                <select id="input-weight-class" name="weight_class_id" class="form-control input-c">
                    <option value="1">Килограмм</option>
                    <option value="2">Грамм</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-status" class="col-sm-2 col-form-label">Статус</label>
            <input type="hidden" name="status" value="0">
            <div class="col-sm-10">
                <label class="ui-switch ui-switch-md info m-t-xs">
                    <input id="input-status" name="status" value="1" type="checkbox" checked>
                    <i class="blue"></i>
                </label>
            </div>
        </div>
        <div class="form-group row">
            <label for="sort-order" class="col-sm-2 col-form-label">Порядок сортировки</label>
            <div class="col-sm-10">
                <input type="number" name="sort_order"
                       class="form-control" id="input-sort-order"
                       placeholder="Порядок сортировки">
            </div>
        </div>
    </div>
</div>
