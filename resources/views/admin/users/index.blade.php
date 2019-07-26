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
					<a href="{{route('admin.users.create')}}" class="btn btn-primary" style="margin: 0px 0px 20px 0px;">Добавить</a>
				</div>
			</div>
		</div>
    <div class="row">
        <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">Имя</th>
				      <th scope="col">email</th>
				      <th scope="col">Права</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach ($data as $value)
						  <tr>
								<td>{{$value->name}}</td>
								<td>{{$value->email}}</td>
								<td>{{$value->getRoleNames()}}</td>
								<td class="" style="display: contents;">
									<form action="{{ route('admin.users.destroy', $value->id)}}" method="post">
									<a href="{{route('admin.users.edit',$value->id)}}" class="btn btn-primary">Edit</a>
	                  @csrf
	                  @method('DELETE')
	                  <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure? Delete ')">Delete</button>
	                </form>
								</td>
							</tr>
						@endforeach

				  </tbody>
				</table>
    </div>
  </div>
</main>
@endsection