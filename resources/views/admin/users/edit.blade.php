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

				<form action="{{route('admin.users.update',$user->id)}}" method="post">
				  @csrf
				  @method('PUT')
          <div class="form-group">
              <label for="inputEmail4">Имя</label>
              <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Сергей" required value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="inputAddress2">E-Mail</label>
            <input type="email" name="email" class="form-control" id="inputAddress2"  required value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="inputAddress">Пароль</label>
            <input type="password"  name="password" class="form-control" id="inputAddress"  >
          </div>
            <div class="form-group">
              <label for="inputState">Права</label>
              <select id="inputState" class="form-control" name="roles" required>
                @foreach ($roles as $role)
                <option {{ $user->hasRole($role)?'selected':'' }} value="{{$role}}">{{$role}}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <div class="form-check">
            </div>
          </div>
          <button type="submit" class="btn btn-primary text-right">OK</button>
				</form>
    	</div>
    </div>
  </div>
</main>
@endsection