@extends('admin.layouts.app')
@section('content')

<main class="main">
  <div class="container-fluit">
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
        <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">Фамилия</th>
				      <th scope="col">Имя</th>
				      <th scope="col">адрес</th>
				      <th scope="col">e-mail</th>
				      <th scope="col">Образование</th>
				      <th scope="col">IP адресс</th>
				      <th scope="col">UTM-метки</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach ($data as $value)
						  <tr>
								<td>{{$value->surname}}</td>
								<td>{{$value->name}}</td>
								<td>{{$value->address}}</td>
								<td>{{$value->email}}</td>
								<td>{{config('myconfig.education')[$value->education]}}</td>
								<td>@role('admin') {{$value->ip}} @endrole</td>
								<td>@role('admin') {{$value->utm}} @endrole</td>

								<td class="" style="display: contents;">
									<form action="{{ route('admin.event_a.destroy', $value->id)}}" method="post">
									  @csrf
	                  @method('DELETE')
	                  <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure? Delete ')">Delete</button>
	                </form>
								</td>
							</tr>
						@endforeach

				  </tbody>
				</table>
				{{ $data->links() }}
    </div>
  </div>
</main>
@endsection