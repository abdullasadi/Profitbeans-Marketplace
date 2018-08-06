@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel without-shadow">
        <div class="d-flex-space-between mb-3">
          <h5 class="card-title mt-0">Product List</h5>

          <a href="{{ route('add-product') }}" class="btn waves-effect waves-light blue"><i class="material-icons left">add</i></a>
        </div>
        <table class="striped centered card">
          <thead class="blue white-text">
            <tr>
              <th class="br-none">Image</th>
              <th class="br-none">Product Name</th>
              <th class="br-none">Model</th>
              <th class="br-none">Price</th>
              <th class="br-none">Status</th>
              <th class="br-none">Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach($products as $product)
            <tr class="less-padding-tr">
              <td>
                <img src="http://via.placeholder.com/150x150" alt="placholder">
              </td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->model }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->stock_status }}</td>
              <td>
                <a class="btn waves-effect waves-light blue action-btn"><i class="material-icons left">create</i></a>
                <button class="btn waves-effect waves-light red action-btn"><i class="material-icons left">delete</i></button>
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

@section('script')

<script type="text/javascript">
  @if(Session::has('success'))
    swal("Yehh!", "{{ Session::get('success') }}", "success");
  @elseif(Session::has('error'))
    swal("Ohh!", "{{ Session::get('error') }}", "error");
  @endif
</script>

@stop
