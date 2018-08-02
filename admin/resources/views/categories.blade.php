@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="d-flex-space-between mb-3">
          <h5 class="card-title">New Products</h5>

          <a class="btn waves-effect waves-light blue"><i class="material-icons left">add</i></a>
        </div>
        <table class="striped centered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Sort Order</th>
              <th>Status</th>
              <th>On Menu</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $category->name }}</td>
              <td>{{ $category->sort_order }}</td>
              <td>{{ $category->status }}</td>
              <td>
                @if($category->on_menu == '1')
                <a class="btn-floating btn-large waves-effect waves-light green on-off-btn"><span>  </span></a>
                @else
                <a class="btn-floating btn-large waves-effect waves-light red on-off-btn"><span>  </span></a>
                @endif
              </td>
              <td>
                <a class="btn waves-effect waves-light blue"><i class="material-icons left">create</i></a>
                <button class="btn waves-effect waves-light red"><i class="material-icons left">delete</i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop
