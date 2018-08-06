@extends('layouts.main')
@section('content')

<div class="container">
  <form action="{{ route('add-product') }}" method="post">
  @csrf
  <div class="row">
    <div class="col s12 d-flex-space-between mt-4">
      <h5 class="card-title mt-0">Add Product</h5>
      <div>
        <button type="submit" class="tooltipped btn waves-effect waves-light blue action-btn" data-position="bottom" data-delay="50" data-tooltip="Save"><i class="material-icons left">save</i></button>
        <a href="#" class="btn waves-effect waves-light red action-btn"><i class="material-icons left">cancel</i></a>
      </div>
    </div>
  </div>
  <div class="row mt-3 card-panel">
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <li class="tab col s3"><a href="#Genarel">Genarel</a></li>
        <li class="tab col s3"><a href="#Data">Data</a></li>
        <li class="tab col s3"><a href="#LInk">Links</a></li>
        <li class="tab col s3"><a href="#Attribute">Attribute</a></li>
        <li class="tab col s3"><a href="#Discount">Discount</a></li>
        <li class="tab col s3"><a href="#Image">Image</a></li>
        <li class="tab col s3"><a href="#Seo">Seo</a></li>
      </ul>
    </div>
    <div id="Genarel" class="col s12">
      <div class="row mt-3">
        <div class="input-field col s12">
          <input name="name" id="name" type="text" class="validate">
          <label for="name">Name</label>
          @if ($errors->has('name'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s12">
          <p>Description:</p>
          <textarea name="description" id="textarea1" class="materialize-textarea ckeditor1"></textarea>
          @if ($errors->has('description'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
          @endif
        </div>
      </div>
    </div>
    <div id="Data" class="col s12">
      <div class="row mt-3">
        <div class="input-field col s6">
          <input name="model" id="model" type="text" class="validate">
          <label for="model">Model</label>
          @if ($errors->has('model'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('model') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s6">
          <input name="sku" id="sku" type="text" class="validate">
          <label for="sku">SKU</label>
          @if ($errors->has('sku'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('sku') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s4">
          <select name="stock_status">
            <option value="" selected >Choose Stock Status</option>
            <option value="1">In Stock</option>
            <option value="0">Out of Stock</option>
          </select>
          <label>Stock Status</label>
        </div>
        <div class="input-field col s4">
          <input name="upc" id="upc" type="text" class="validate">
          <label for="upc">UPC</label>
          @if ($errors->has('upc'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('upc') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s4">
          <input name="ean" id="ean" type="text" class="validate">
          <label for="ean">EAN</label>
          @if ($errors->has('ean'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('ean') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s4">
          <input name="price" id="price" type="text" class="validate">
          <label for="price">Price</label>
          @if ($errors->has('price'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s4">
          <input name="cost_price" id="cost_price" type="text" class="validate">
          <label for="cost_price">Cost Price</label>
        </div>
        <div class="input-field col s4">
          <select name="tax_class">
            <option value="" selected>Choose your tax class</option>
            <option value="1">---None---</option>
            <option value="2">Taxable Goods</option>
            <option value="3">CA Tax</option>
          </select>
          <label>Tax Class</label>
        </div>
        <div class="input-field col s4">
          <input name="length" id="length" type="text" class="validate">
          <label for="length">Dimension(length)</label>
        </div>
        <div class="input-field col s4">
          <input name="height" id="height" type="text" class="validate">
          <label for="height">Dimension(height)</label>
        </div>
        <div class="input-field col s4">
          <input name="width" id="width" type="text" class="validate">
          <label for="width">Dimension(width)</label>
        </div>
      </div>
    </div>
    <div id="LInk" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="category" id="category" type="text" class="validate">
          <label for="category">Category</label>
        </div>
        <div class="input-field col s6">
          <input name="manufacturer" id="manufacturer" type="text" class="validate autocomplete">
          <label for="manufacturer">Manufacturer</label>
        </div>
      </div>
    </div>
    <div id="Attribute" class="col s12">Test 4</div>
    <div id="Discount" class="col s12">Test 4</div>
    <div id="Image" class="col s12">
      <div class="row">
        <div class="col s12 d-flex">
          <div class="file-field input-field">
            <div class="btn">
              <span>Image</span>
              <input type="file" name="image" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn waves-effect waves-light blue add-img-input mt-4 ml-3"><i class="material-icons left">add</i></button>
        </div>
      </div>
    </div>
    <div id="Seo" class="col s12">
      <div class="row">
        <div class="col s12">
          <div class="card-panel d-flex">
            <span><i class="material-icons">info</i></span>
             <span class="blue-text text-darken-2 mt-2px ml-1">Don't use spaces, replace spaces with - and make sure the Slug URL is globally unique or leave it empty for auto genareted Slug.</span>
           </div>
        </div>
        <div class="input-field col s6">
          <input name="meta_tag_title" id="meta_tag_title" type="text" class="validate">
          <label for="meta_tag_title">Meta Tag Title</label>
        </div>
        <div class="input-field col s6">
          <input name="slug" id="slug" type="text" class="validate">
          <label for="slug">Slug URL</label>
        </div>
        <div class="input-field col s12">
          <input name="meta_tag_keywords" id="meta_tag_keywords" type="text" class="validate">
          <label for="meta_tag_keywords">Meta Tag Keywords</label>
        </div>
        <div class="input-field col s12">
          <input name="meta_tag_description" id="meta_tag_description" type="text" class="validate">
          <label for="meta_tag_description">Meta Tag Description</label>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>

@stop

@section('script')

<script type="text/javascript">
  // Initialize ckeditor
  $('.ckeditor1').ckeditor();
  // Initialize Meterialize select
  $(document).ready(function() {
    $('select').material_select();
    $('ul.tabs').tabs();


    $.ajax({
      url: "{{ route('product-ajax') }}",
      type: "POST",
      data: {'_token': '{{ csrf_token() }}', 'type': 'manAuto'}
    }).done(function( results ) {
      $('.modal').modal();
      $('select').material_select();
      var catName = [];
      for(let result of results) {
        catName.push({id:result.id, text:result.name, img: result.image});
      }
      // console.log(catName);
      $('#manufacturer').autocomplete2({
        data: catName
      });
    });

    $.ajax({
      url: "{{ route('product-ajax') }}",
      type: "POST",
      data: {'_token': '{{ csrf_token() }}', 'type': 'catAuto'}
    }).done(function( results ) {
      var catName = [];
      for(let result of results) {
        catName.push({id:result.id, text:result.name, img: result.image});
      }
      $('#category').autocomplete2({
        data: catName
      });
    });

    $('#category').focusout(function() {
      var id = $('#category').attr('data-id');
      alert(id)
    });


    // Dinamically Add image input box
    $(document).on('click', '.add-img-input', function(e) {
      e.preventDefault();
      var html = `
      <div class="col s12 d-flex">
        <div class="file-field input-field">
          <div class="btn">
            <span>Image</span>
            <input type="file" name="image" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <button class="btn waves-effect waves-light red remove-input-image mt-4 ml-3"><i class="material-icons left">remove</i></button>
      </div>`;

      $(this)
        .parent()
        .parent()
        .append(html);
    });

    $(document).on('click', '.remove-input-image', function(e) {
      e.preventDefault();
      $(this).parent().hide('slow', function() {
        $(this).remove();
      });
    })

  });


</script>

@stop
