@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">

    <form action="{{ route('add_category') }}" class="col s12" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <input name="name" id="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="col s12">
          @if ($errors->has('name'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <p>Description</p>
          <textarea name="description" id="textarea1" class="materialize-textarea ckeditor1"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="seo_url" id="seo_url" type="text" class="validate">
          <label for="seo_url">SEO URL</label>
        </div>
        <div class="input-field col s6">
          <input type="hidden" id="parent_id" name="parent_id" value="">
          <input name="parent" id="autocomplete-input" type="text" class="validate autocomplete">
          <label for="autocomplete-input">Parent Category</label>
        </div>
        <div class="col s12">
          @if ($errors->has('seo_url'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('seo_url') }}</strong>
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="meta_tag_title" id="meta_tag_title" type="text" class="validate">
          <label for="meta_tag_title">Meta Tag Title</label>
          @if ($errors->has('meta_tag_title'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('meta_tag_title') }}</strong>
            </span>
          @endif
        </div>
        <div class="col s6">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="img">
            </div>
            @if ($errors->has('img'))
              <span class="invalid-feedback red-text" role="alert">
                  <strong>{{ $errors->first('img') }}</strong>
              </span>
            @endif
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="meta_tag_description" id="textarea2" class="materialize-textarea"></textarea>
          <label for="textarea2">Meta Tag Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="meta_tag_keywords" id="meta_tag_keywords" type="text" class="validate">
          <label for="meta_tag_keywords">Meta Tag Keywords</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
           <select name="menu_column">
             <option value="" selected>Choose your option</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
           </select>
           <label>Menu Column</label>
        </div>
        <div class="input-field col s6">
          <input name="sort_order" id="sort_order" type="text" class="validate">
          <label for="sort_order">Sort Order</label>
        </div>
      </div>
      <div class="row">
        <div class="switch col s6">
          <span class="pr-3">Status: </span>
          <label>
            Off
            <input type="checkbox" name="status" value="1">
            <span class="lever"></span>
            On
          </label>
        </div>
        <div class="switch col s6">
          <span class="pr-3">On Menu: </span>
          <label>
            Off
            <input type="checkbox" name="on_menu" value="1">
            <span class="lever"></span>
            On
          </label>
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn waves-effect waves-light blue">Save</button>
      </div>
    </form>
  </div>
</div>
@stop

@section('script')

<script type="text/javascript">
  // Initialize ckeditor
  $('.ckeditor1').ckeditor();
  // Initialize Meterialize select
  $(document).ready(function() {
    $('select').material_select();
  });

  $(document).ready(function() {
    $.ajax({
      url: "{{ route('ajax_request') }}",
      type: "POST",
      data: {'_token': '{{ csrf_token() }}', 'type': 'autocomplete'}
    }).done(function( results ) {
      console.log(results);
      $(document).ready(function() {
      $('.modal').modal();
      $('select').material_select();
      var catName = [];
      for(let result of results) {
        catName.push({id:result.id, text:result.text, img: result.image});
      }



      $('input.autocomplete').autocomplete2({
          data: catName,
        });
      });
    });




  });




</script>

@stop
