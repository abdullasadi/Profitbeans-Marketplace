@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col s12">
      @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
      @endif
    </div>
    <form action="{{ route('add_category') }}" class="col s12" method="post">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <input name="name" id="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <p>Description</p>
          <textarea name="description" id="textarea1" class="materialize-textarea ckeditor1"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="seo_url" id="seo_url" type="text" class="validate">
          <label for="seo_url">SEO URL</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="meta_tag_title" id="meta_tag_title" type="text" class="validate">
          <label for="meta_tag_title">Meta Tag Title</label>
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
          <input name="menu_column" id="menu_column" type="text" class="validate">
          <label for="menu_column">Menu Colunm</label>
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
        <button type="submit" name="button" class="btn waves-effect waves-light blue">Save</button>
      </div>
    </form>
  </div>
</div>
@stop

@section('script')

<script type="text/javascript">
  // Initialize ckeditor
  $('.ckeditor1').ckeditor();
</script>

@stop
