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
				<form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
				  @csrf
				  <div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label">Текст</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" name="post" required maxlength="500"></textarea>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2">Выберите файл</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control-file" name="image" required>
				    </div>
				  </div>
					<button type="submit" class="btn btn-primary">OK</button>
				</form>
    	</div>
    </div>
  </div>
</main>
@endsection