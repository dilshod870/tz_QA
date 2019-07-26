<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/admin">Главная <span class="sr-only">(current)</span></a>
        </li>
        @role('admin')
        <li class="nav-item active">
          <a class="nav-link" href="/admin/posts">Посты <span class="sr-only"></span></a>
        </li>
        @endrole
        @hasanyrole('admin|admin_event_a')
        <li class="nav-item active">
          <a class="nav-link" href="/admin/event_a">Мероприятия А <span class="sr-only"></span></a>
        </li>
        @endhasanyrole
        @hasanyrole('admin|admin_event_b')
        <li class="nav-item active">
          <a class="nav-link" href="/admin/event_b">Мероприятия B <span class="sr-only"></span></a>
        </li>
        @endhasanyrole
        @role('admin')
        <li class="nav-item ">
          <a class="nav-link" href="/admin/users">Пользователи <span class="sr-only"></span></a>
        </li>
        @endrole
        <li class="nav-item ">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>

      </ul>
    </div>
  </nav>
</header>