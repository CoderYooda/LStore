<div class="box mb-0">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Производитель</label>
                    <select id="manufacturers" data-plugin="select2" data-option="{width: '100%'}" class="form-control">
                        <option value="null">Не выбрано</option>
                        @foreach($parametrs->manufacturers as $manufacturer)
                            <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Основная категория</label>
                    <select id="main_category" data-plugin="select2" data-option="{width: '100%'}" class="form-control">
                        <option value="null">Не выбрано</option>
                        @foreach($parametrs->categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState" class="d-block">State</label>
                    <select id="inputState" class="custom-select w-100">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Check me out
                    </label>
                </div>
            </div>
    </div>
</div>
