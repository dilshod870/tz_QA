@extends('layouts.app')
@section('content')

<main class="main">
  <div class="container-fluit">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8" >
              <?php $faker = \Faker\Factory::create('Ru_RU'); ?>
              @for ($i = 0; $i < 5; $i++)
                  <div class="card mb-6" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{$faker->imageUrl(100, 50)}}" width="100" height="200" class="card-img" >
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$faker->realtext(20)}}</h5>
                          <p class="card-text">{{$faker->realtext(400)}}</p>
                          <p class="card-text text-right"><small class="text-muted">{{$faker->date()}}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
              @endfor
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
              <h3>Мероприятия А</h3>
              <form id="event">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Имя</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Сергей" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Фамилия</label>
                    <input type="text" name="surname" class="form-control" id="inputPassword4" placeholder="Иванов" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Адрес</label>
                  <input type="text"  name="address" class="form-control" id="inputAddress" placeholder="г.Москва ул.Гагарина дом 28 кв 10" required>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">E-Mail</label>
                  <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="mail@gmail.com" required>
                </div>
                  <div class="form-group">
                    <label for="inputState">Образования</label>
                    <select id="inputState" class="form-control" name="education">
                      <option value="1">Bachelor</option>
                      <option value="2">Master</option>
                      <option value="3">PhD </option>
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
      </div>
    </div>
  </div>
</main>
@endsection
@push('scripts')
<script type="text/javascript">
  $("#event").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form =  $(this).serialize();
    console.log(form);
    $.ajax({
           statusCode: {
              404: function() {
                alert( "404 page not found" );
              },
              405: function() {
                alert( "405 (Method Not Allowed)" );
              }
            },
           type: "POST",
           url: "{{route('event_a.store')}}",
           data: form, // serializes the form elements.
           success: function(data)
           {
               $('div.jumbotron').html(data);
               console.log(data); // show response from the php script.
           }
    });
});
</script>
@endpush