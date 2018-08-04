@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">

    <form action="{{ route('add-manufacturer') }}" class="col s12" method="post">
      @csrf
      <div class="row">
        <div class="col s12">
          <h5>Add Manufacturers</h5>
        </div>
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
        <div class="input-field col s12">
          <input name="slug" id="slug" type="text" class="validate">
          <label for="slug">Slug</label>
          @if ($errors->has('slug'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('slug') }}</strong>
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="sort_order" id="sort_order" type="text" class="validate">
          <label for="sort_order">Sort Order</label>
          @if ($errors->has('sort_order'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('sort_order') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field col s6">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="image">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          @if ($errors->has('image'))
            <span class="invalid-feedback red-text" role="alert">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn waves-effect waves-light blue">Save</button>
      </div>
    </form>
  </div>
</div>
@stop
