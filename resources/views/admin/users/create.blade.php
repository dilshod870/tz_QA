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

				<form action="{{route('admin.users.store')}}" method="post">
				  @csrf
          <div class="form-group">
              <label for="inputEmail4">Имя</label>
              <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Иванов Сергей" required value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="inputAddress2">E-Mail</label>
            <input type="email" name="email" class="form-control" id="inputAddress2"  required value="{{ old('email') }}">
          </div>
          <div class="form-group">
            <label for="inputAddress">Пароль</label>
            <input type="password"  name="password" class="form-control" id="inputAddress"  required minlength="8" value="{{ old('password') }}">
          </div>
            <div class="form-group">
              <label for="inputState">Права</label>
              <select id="inputState" class="form-control" name="roles" required>
                @foreach ($roles as $role)
                <option  value="{{$role}}">{{$role}}</option>
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