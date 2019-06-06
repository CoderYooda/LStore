@extends('admin.layout.main')

@section('content')
    <div class="padding">
        <h6>Inputs</h6>
        <p>
            Most common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.
        </p>
        <form class="p-x-xs">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Text</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Rounded</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control rounded">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="input-id-1">Label focus</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-id-1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Placeholder</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="placeholder">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Help text</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                    <small class="form-text text-muted">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Disabled</label>
                <div class="col-lg-10">
                    <input class="form-control" type="text" placeholder="Disabled input here..." disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Readonly </label>
                <div class="col-lg-10">
                    <input class="form-control" type="text" placeholder="Readonly  input here..." readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Readonly plain text</label>
                <div class="col-lg-10">
                    <p class="form-control-plaintext">email@example.com</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="formGroupInputLarge">Large label</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-lg" type="text" id="formGroupInputLarge" placeholder="Large input">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="formGroupInputSmall">Small label</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" type="text" id="formGroupInputSmall" placeholder="Small input">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Column sizing</label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder=".col-md-2">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder=".col-md-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Input groups</label>
                <div class="col-sm-10">
                    <div class="input-group mb-2">
                                        <span class="input-group-prepend">
            <span class="input-group-text">@</span>
                                        </span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control">
                        <span class="input-group-append">
            <span class="input-group-text">.00</span>
                                        </span>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-prepend"><span class="input-group-text">$</span></span>
                        <input type="text" class="form-control">
                        <span class="input-group-append"><span class="input-group-text">.00</span></span>
                    </div>
                    <div class="input-group mb-2">
                                        <span class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox">
            </div>
          </span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group">
                                        <span class="input-group-prepend">
            <div class="input-group-text">
              <input type="radio">
            </div>
          </span>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Button addons</label>
                <div class="col-sm-10">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <button class="btn white" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn white" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">With dropdowns</label>
                <div class="col-sm-10">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <button class="btn white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                            <button class="btn white dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Segmented</label>
                <div class="col-sm-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button type="button" class="btn white">Action</button>
                            <button type="button" class="btn white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        <div class="input-group-append">
                            <button type="button" class="btn white">Action</button>
                            <button type="button" class="btn white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="_600">Checkboxes and radios</h6>
            <p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one from many.</p>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Default (stacked)</label>
                <div class="col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value=""> one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="checkbox disabled">
                        <label>
                            <input type="checkbox" value="" disabled> two is disabled
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> two can be something else and selecting it will deselect one
                        </label>
                    </div>
                    <div class="radio disabled">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled> three is disabled
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Inline</label>
                <div class="col-sm-10">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option1"> a
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option2"> b
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option3"> c
                    </label>
                    <br>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Styled</label>
                <div class="col-sm-10">
                    <div class="checkbox">
                        <label class="ui-check">
                            <input type="checkbox" value="">
                            <i class="dark-white"></i>
                            one
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="ui-check">
                            <input type="checkbox" checked value="">
                            <i class="dark-white"></i>
                            two checked
                        </label>
                    </div>
                    <div class="checkbox disabled">
                        <label class="ui-check">
                            <input type="checkbox" checked disabled value="">
                            <i class="dark-white"></i>
                            three checked and disabled
                        </label>
                    </div>
                    <div class="checkbox disabled">
                        <label class="ui-check">
                            <input type="checkbox" disabled value="">
                            <i class="dark-white"></i>
                            four disabled
                        </label>
                    </div>
                    <div class="radio">
                        <label class="ui-check">
                            <input type="radio" name="a" value="option1">
                            <i class="dark-white"></i>
                            one
                        </label>
                    </div>
                    <div class="radio">
                        <label class="ui-check">
                            <input type="radio" name="a" value="option2" checked>
                            <i class="dark-white"></i>
                            two checked
                        </label>
                    </div>
                    <div class="radio disabled">
                        <label class="ui-check">
                            <input type="radio" value="option2" checked disabled>
                            <i class="dark-white"></i>
                            three checked and disabled
                        </label>
                    </div>
                    <div class="radio disabled">
                        <label class="ui-check">
                            <input type="radio" name="a" disabled>
                            <i class="dark-white"></i>
                            four disabled
                        </label>
                    </div>
                    <div class="radio">
                        <label class="ui-check ui-check-md">
                            <input type="radio" name="a">
                            <i class="dark-white"></i>
                            Medium size radio
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="ui-check ui-check-md">
                            <input type="checkbox">
                            <i class="dark-white"></i>
                            Medium size checkbox
                        </label>
                    </div>
                    <div class="radio">
                        <label class="ui-check ui-check-lg">
                            <input type="radio" name="a">
                            <i class="dark-white"></i>
                            Large size radio
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="ui-check ui-check-lg">
                            <input type="checkbox">
                            <i class="dark-white"></i>
                            Large size checkbox
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Switch</label>
                <div class="col-sm-10">
                    <label class="ui-switch mt-1 mr-2">
                        <input type="checkbox" checked>
                        <i></i>
                    </label>
                    <label class="ui-switch primary mt-1 mr-2">
                        <input type="checkbox" checked>
                        <i></i>
                    </label>
                    <label class="ui-switch info mt-1 mr-2">
                        <input type="checkbox" checked>
                        <i></i>
                    </label>
                    <label class="ui-switch warning mt-1 mr-2">
                        <input type="checkbox" checked>
                        <i></i>
                    </label>
                    <label class="ui-switch danger mt-1 mr-2">
                        <input type="checkbox" checked>
                        <i></i>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Radio Switch</label>
                <div class="col-sm-10">
                    <label class="ui-switch mt-1 mr-2">
                        <input type="radio" name='switch' checked>
                        <i></i>
                    </label>
                    <label class="ui-switch mt-1 mr-2">
                        <input type="radio" name='switch'>
                        <i></i>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Medium</label>
                <div class="col-sm-10">
                    <label class="ui-switch ui-switch-md info m-t-xs">
                        <input type="checkbox" checked>
                        <i></i>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Large</label>
                <div class="col-sm-10">
                    <label class="ui-switch ui-switch-lg dark mt-1 mr-2">
                        <input type="checkbox">
                        <i></i>
                    </label>
                </div>
            </div>
            <h6 class="_600">Selects and Textarea</h6>
            <p>Use the default option, or add multiple to show multiple options at once.</p>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Select</label>
                <div class="col-sm-10">
                    <select class="form-control input-c">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Select large</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-lg">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Select small</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-sm">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Custom select</label>
                <div class="col-sm-10">
                    <select class="custom-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Multiple</label>
                <div class="col-lg-4">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Disabled</label>
                <div class="col-sm-10">
                    <select class="form-control" disabled>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Textarea</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">File input</label>
                <div class="col-sm-10">
                    <div class="form-file">
                        <input type="file">
                        <button class="btn white">Select file ...</button>
                    </div>
                </div>
            </div>
            <h6 class="_600 m-v-lg">Material design form style</h6>
            <div class="mb-2-lg row">
                <div class="col-sm-10 col-sm-offset-2">
                    <div class="row row-sm">
                        <div class="col-sm-12">
                            <div class="md-form-group">
                                <input class="md-input" disabled>
                                <label>Company(disabled)</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="md-form-group float-label">
                                <input class="md-input" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label>First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="md-form-group float-label">
                                <input class="md-input" value="" onkeyup="this.setAttribute('value', this.value);" required>
                                <label>Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="md-form-group">
                                <input class="md-input">
                                <label>Address</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="md-form-group">
                                <input class="md-input">
                                <label>City</label>
                                <span class="md-input-msg right">30/30</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="md-form-group">
                                <input class="md-input">
                                <label>State</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="md-form-group">
                                <input class="md-input">
                                <label>Postal Code</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="md-form-group">
                                <textarea class="md-input" rows="4"></textarea>
                                <label>Biography</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>
                                <label class="md-check">
                                    <input type="checkbox">
                                    <i class="indigo"></i>
                                    Checkbox
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="checkbox" checked>
                                    <i class="blue"></i>
                                    Checkbox: checked
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="checkbox" disabled>
                                    <i class="indigo"></i>
                                    Checkbox: disabled
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="checkbox" checked disabled>
                                    <i class="indigo"></i>
                                    Checkbox: checked and disabled
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="checkbox">
                                    <i class="pink"></i>
                                    Checkbox: pink
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="checkbox" checked>
                                    <i class="green"></i>
                                    Checkbox: green
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="checkbox" checked>
                                    <i class="teal no-icon"></i>
                                    Checkbox: no icon
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="radio">
                                    <i class="indigo"></i>
                                    Radio
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="radio" checked>
                                    <i class="blue"></i>
                                    Radio: checked
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="a" disabled>
                                    <i class="indigo"></i>
                                    Radio: disabled
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="a" checked disabled>
                                    <i class="indigo"></i>
                                    Radio: checked and disabled
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="radio">
                                    <i class="pink"></i>
                                    Radio: pink
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="radio" checked name="b">
                                    <i class="green"></i>
                                    Radio: green
                                </label>
                            </p>
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="b">
                                    <i class="teal no-icon"></i>
                                    Radio: no icon
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                <label class="md-switch">
                                    <input type="checkbox">
                                    <i class="indigo"></i>
                                    Switch
                                </label>
                            </p>
                            <p>
                                <label class="md-switch">
                                    <input type="checkbox" checked>
                                    <i class="blue"></i>
                                    Switch: checked
                                </label>
                            </p>
                            <p>
                                <label class="md-switch">
                                    <input type="checkbox" disabled>
                                    <i class="blue"></i>
                                    Switch: disabled
                                </label>
                            </p>
                            <p>
                                <label class="md-switch">
                                    <input type="checkbox" checked disabled>
                                    <i class="blue"></i>
                                    Switch: checked and disabled
                                </label>
                            </p>
                            <p>
                                <label class="md-switch">
                                    <input type="checkbox">
                                    <i class="pink"></i>
                                    Switch: pink
                                </label>
                            </p>
                            <p>
                                <label class="md-switch">
                                    <input type="radio" name='switch' checked>
                                    <i class="green"></i>
                                    Switch: radio 1
                                </label>
                            </p>
                            <p>
                                <label class="md-switch">
                                    <input type="radio" name='switch'>
                                    <i class="orange"></i>
                                    Switch: radio 2
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
