<div class="form-group">
    <label for="inputAddress">Наименование</label>
    <input id="name" name="name" placeholder="Наименование" type="text" class="form-control">
</div>
<div class="form-group">
    <div class="input-group">
        <select name="category_id" id="main_category" data-plugin="select2"
                data-option="{width: '100%', 'minimumResultsForSearch': 2}"
                class="form-control">
            <option value="null">Не выбрана</option>
            @foreach($parametrs->categories as $category)
                <option value="{{ $category->id }}">{{ $category->description()->first()->name }}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <button class="btn white modal_open" type="button"
                    data-plugin="modal_load"
                    data-name="add_category"
                    data-url="{{ route('AddCategoryModal') }}"
            ><i class="fa fa-bars"></i></button>
        </div>
    </div>
</div>
<div class="form-group">
    <input name="article" placeholder="Артикул" type="text" class="form-control">
</div>
<div class="form-group">
    <div class="input-group">
        <select name="supplier_id" id="main_supplier" data-plugin="select2"
                data-option="{width: '100%', 'minimumResultsForSearch': 2}"
                class="form-control">
            <option value="null">Не выбран</option>
            @foreach($parametrs->suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <button class="btn white modal_open" type="button"
                    data-plugin="modal_load"
                    data-name="list_supplier"
                    data-url="{{ route('ListSupplierModal') }}"
            ><i class="fa fa-bars"></i></button>
        </div>
    </div>
</div>
<div class="form-group">
    <input name="oem" placeholder="OEM номер" type="text" class="form-control">
</div>
<div class="form-group">
    <input name="minimum_stock" placeholder="Минимальный остаток на складе" type="text" class="form-control">
</div>