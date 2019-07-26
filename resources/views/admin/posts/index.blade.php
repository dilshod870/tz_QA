@extends('admin.layouts.app')
@section('content')

<main class="main">
  <div class="container-fluid">
    @if (session('success'))
			    <div class="alert alert-success">
			        {{ session('success') }}
			    </div>
				@endif
        @if (session('warning'))
			    <div class="alert alert-warning">
			        {{ session('warning') }}
			    </div>
				@endif
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<div class="text-right">
					<a href="{{route('admin.posts.create')}}" class="btn btn-primary" style="margin: 0px 0px 20px 0px;">Добавить</a>
				</div>
			</div>
		</div>
    <div class="row">
        <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">Текст</th>
				      <th scope="col">Изображение</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach ($posts as $post)
						  <tr>
								<td>{{Str::limit($post->post,100)}}</td>
								<td>
									@if(!empty($post->image))
										<img src="/images/posts/{{$post->image}}" width="100">
									@endif
								</td>
								<td class="" style="display: contents;">
									<form action="{{ route('admin.posts.destroy', $post->id)}}" method="post">
									<a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-success">View</a>
									<a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
	                  @csrf
	                  @method('DELETE')
	                  <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure? Delete ')">Delete</button>
	                </form>
								</td>
							</tr>
						@endforeach

				  </tbody>
				</table>
				{{ $posts->links() }}
    </div>
  </div>
</main>
@endsection