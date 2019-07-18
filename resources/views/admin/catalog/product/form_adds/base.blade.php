<ul class="nav nav-sm nav-pills nav-active-primary mb-3 clearfix">
    @foreach($parametrs->languages as $language)
    <li class="nav-item">
        <a class="nav-link @if( $loop->index == 0 ) active @endif"
           href="#" data-toggle="tab"
           data-target="#language{{ $language->language_id }}">
            {{ $language->name }} <span class="badge badge-sm primary ml-2">160</span>
        </a>
    </li>
    @endforeach
</ul>
<div class="tab-content">
    @foreach($parametrs->languages as $language)
        <div class="tab-pane fade @if( $loop->index == 0 ) active  show @endif" id="language{{ $language->language_id }}">
            <div class="box mb-0">
                <div class="box-body">
                    <div class="form-group row">
                        <label for="name_{{ $language->language_id }}" class="col-sm-2 col-form-label">Название товара</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_description[{{ $language->language_id }}][name]"
                                   class="form-control" id="name_{{ $language->language_id }}"
                                   placeholder="Название товара">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_h1_{{ $language->language_id }}" class="col-sm-2 col-form-label">HTML-тег H1</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_description[{{ $language->language_id }}][meta_h1]"
                                   class="form-control" id="meta_h1_{{ $language->language_id }}"
                                   placeholder="HTML-тег H1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_title_{{ $language->language_id }}" class="col-sm-2 col-form-label">Мета-тег Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_description[{{ $language->language_id }}][meta_title]"
                                   class="form-control" id="meta_title_{{ $language->language_id }}"
                                   placeholder="Мета-тег Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_description_{{ $language->language_id }}" class="col-sm-2 col-form-label">Мета-тег Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="product_description[{{ $language->language_id }}][meta_description]"
                                      rows="5" placeholder="Мета-тег Description" id="meta_description_{{ $language->language_id }}"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_keywords_{{ $language->language_id }}" class="col-sm-2 col-form-label">Мета-тег Keywords</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="product_description[{{ $language->language_id }}][meta_keywords]"
                                      rows="5" placeholder="Мета-тег Keywords" id="meta_keywords_{{ $language->language_id }}"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input_tag_{{ $language->language_id }}" class="col-sm-2 col-form-label">Теги товара</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_description[{{ $language->language_id }}][meta_tag]"
                                   class="form-control" id="input_tag_{{ $language->language_id }}"
                                   placeholder="Теги товара">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
