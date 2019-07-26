@extends('admin.layouts.app')
@section('content')

<main class="main">
  <div class="container">
    <div class="row">
    	<div class="col-sm-12">
				  <div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label">Текст</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" name="post" rows="10" readonly="">{{$post->post}}</textarea>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2"></label>
				    <div class="col-sm-10">
				      <img src="/images/posts/{{$post->image}}" width="300">
				    </div>
				  </div>

    	</div>
    </div>
  </div>
</main>
@endsection