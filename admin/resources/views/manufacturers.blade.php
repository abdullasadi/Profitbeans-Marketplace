@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel without-shadow">
        <div class="d-flex-space-between mb-3">
          <h5 class="card-title mt-0">Manufacturer Lists</h5>

          <a href="{{ route('add-manufacturer') }}" class="btn waves-effect waves-light blue"><i class="material-icons left">add</i></a>
        </div>
        <table class="striped centered card">
          <thead class="blue white-text">
            <tr>
              <th class="br-none">Image</th>
              <th class="br-none">Name</th>
              <th class="br-none">Sort Order</th>
              <th class="br-none">Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($manufacturers as $manufacturer)
            @php
              if($manufacturer->image == 'default'){
                $image = ImgModify::resize('default.png', 35, 35);
              }else{
                $image = ImgModify::resize($manufacturer->image, 35, 35);
              }
            @endphp
            <tr class="less-padding-tr">
              <td>
                <img src="{{ $image }}" alt="placholder">
              </td>
              <td>{{ $manufacturer->name }}</td>
              <td>{{ $manufacturer->sort_order }}</td>
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
  swal("Oopps!", "{{ Session::get('error') }}", "error");
  @endif
</script>

@stop
