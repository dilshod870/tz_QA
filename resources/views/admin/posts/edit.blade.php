@extends('admin.layouts.app')
@section('content')

<main class="main">
  <div class="container">
    	@if (session('success'))
			    <div class="alert alert-success">
			        {{ session('success') }}
			    </div>
			@endif
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
     <div class="row">
    	<div class="col-sm-12">
				<form action="{{route('admin.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
				  @csrf
				  @method('PUT')
				  <div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label">Текст</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" name="post" rows="10" required  maxlength="200">{{$post->post}}</textarea>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2">Example file input</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control-file" name="image">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2"></label>
				    <div class="col-sm-10">
				      <img src="/images/posts/{{$post->image}}" width="300">
				    </div>
				  </div>
					<button type="submit" class="btn btn-primary">OK</button>
				</form>
    	</div>
    </div>
  </div>
</main>
@endsection