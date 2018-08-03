@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="d-flex-space-between mb-3">
          <h5 class="card-title">Manufacturer Lists</h5>

          <a href="{{ route('add-manufacturer') }}" class="btn waves-effect waves-light blue"><i class="material-icons left">add</i></a>
        </div>
        <table class="striped centered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Sort Order</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($manufacturers as $manufacturer)
            <tr>
              <td>{{ $manufacturer->name }}</td>
              <td>{{ $manufacturer->sort_order }}</td>
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

@section('script')

<script type="text/javascript">
  @if(Session::has('success'))
  swal("Yehh!", "{{ Session::get('success') }}", "success");
  @elseif(Session::has('error'))
  swal("Oopps!", "{{ Session::get('error') }}", "error");
  @endif
</script>

@stop