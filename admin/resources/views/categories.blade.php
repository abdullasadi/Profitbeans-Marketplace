@extends('layouts.main')
@section('content')

<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel without-shadow">
        <div class="d-flex-space-between mb-3">
          <h5 class="card-title mt-0">Categories</h5>

          <a href="{{ route('add_category') }}" class="btn waves-effect waves-light blue"><i class="material-icons left">add</i></a>
        </div>
        <table class="striped centered card">
          <thead class="blue white-text">
            <tr>
              <th class="br-none">Image</th>
              <th class="br-none">Name</th>
              <th class="br-none">Sort Order</th>
              <th class="br-none">Status</th>
              <th class="br-none">On Menu</th>
              <th class="br-none">Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach($categories as $category)
            @php
              if($category->image == 'default'){
                $image = ImgModify::resize('default.png', 35, 35);
              }else{
                $image = ImgModify::resize($category->image, 35, 35);
              }
            @endphp
            <tr class="less-padding-tr">
              <td>
                <img src="{{ $image }}" alt="placholder">
              </td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->sort_order }}</td>
              <td>{{ $category->status }}</td>
              <td class="on-menu-switch" data-id="{{ $category->id }}" data-value="{{ $category->on_menu }}">
                @if($category->on_menu == '1')
                <a class="btn-floating btn-large waves-effect waves-light green on-off-btn on-menu-change"><span>  </span></a>
                @else
                <a class="btn-floating btn-large waves-effect waves-light red on-off-btn on-menu-change"><span>  </span></a>
                @endif
              </td>
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

<script type="text/javascript">
  $(document).ready(function() {
    $('.on-menu-switch').click(function() {
      var id = $(this).data('id');
      var value = $(this).data('value');
      $.ajax({
        url: "{{ route('ajax_request') }}",
        type: "POST",
        context:this,
        data: {'_token': '{{ csrf_token() }}', 'type': 'onMenuChange', 'id': id, 'value': value}
      }).done(function(results) {
        if(value == '0') {
          $(this).attr('data-value', '1');
          $(this).html('<a class="btn-floating btn-large waves-effect waves-light green on-off-btn on-menu-change"><span>  </span></a>');
        } else {
          $(this).attr('data-value', '0');
          $(this).html('<a class="btn-floating btn-large waves-effect waves-light red on-off-btn on-menu-change"><span>  </span></a>');
        }
        //console.log(results);
      });
    });
  })

</script>

@stop
