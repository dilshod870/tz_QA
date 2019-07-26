@extends('layouts.app')
@section('content')

<main class="main">
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="col-md-4">
        <div class="card" style="margin-bottom: 10px">
          <img src="/images/posts/{{$post->image}}" class="card-img-top" >
          <div class="card-body">
            <p class="card-text">{{str_limit($post->post,50)}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <img src="" id="img_modal">
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
  $('img').click(function(){
    var src = $(this).attr('src');
    $('#img_modal').attr('src',src);
    $("#myModal").modal("show");
  });
</script>
@endpush