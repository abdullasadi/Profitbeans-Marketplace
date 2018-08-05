@extends('layouts.main')
@section('content')

<div class="container">
  <form action="{{ route('add-product') }}" method="post">
  @csrf
  <div class="row mt-3">
    <div class="col s12 d-flex-space-between mb-3">
      <h5 class="card-title mt-0">Add Product</h5>
      <div>
        <button type="submit" class="tooltipped btn waves-effect waves-light blue action-btn" data-position="bottom" data-delay="50" data-tooltip="Save"><i class="material-icons left">save</i></button>
        <a href="#" class="btn waves-effect waves-light red action-btn"><i class="material-icons left">cancel</i></a>
      </div>
    </div>
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
        </div>
        <div class="input-field col s12">
          <p>Description:</p>
          <textarea name="description" id="textarea1" class="materialize-textarea ckeditor1"></textarea>
        </div>
      </div>
    </div>
    <div id="Data" class="col s12">
      <div class="row mt-3">
        <div class="input-field col s12">
          <input name="model" id="model" type="text" class="validate">
          <label for="model">Model</label>
        </div>
        <div class="input-field col s6">
          <input name="upc" id="upc" type="text" class="validate">
          <label for="upc">UPC</label>
        </div>
        <div class="input-field col s6">
          <input name="ean" id="ean" type="text" class="validate">
          <label for="ean">EAN</label>
        </div>
        <div class="input-field col s6">
          <input name="price" id="price" type="text" class="validate">
          <label for="price">Price</label>
        </div>
        <div class="input-field col s6">
          <select>
            <option value="" selected>Choose your tax class</option>
            <option value="1">---None---</option>
            <option value="2">Taxable Goods</option>
            <option value="3">CA Tax</option>
          </select>
          <label>Tax Class</label>
        </div>
        <div class="input-field col s12">
          <input name="sku" id="sku" type="text" class="validate">
          <label for="sku">SKU</label>
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
        <div class="col s12">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="image">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="Seo" class="col s12">
      <div class="row">
        <div class="col s12">
          <div class="input-field col s12">
            <input name="met_tag_title" id="met_tag_title" type="text" class="validate">
            <label for="met_tag_title">Meta Tag Title</label>
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
      console.log(catName);
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
      console.log(catName);
      $('#category').autocomplete2({
        data: catName
      });
    });

  });


</script>

@stop
