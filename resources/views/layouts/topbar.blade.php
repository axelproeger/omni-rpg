<!-- Topbar Navbar -->
<ul class="navbar-nav">


  <!-- Nav Item - Alerts -->
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <!-- Counter - Alerts -->
      <span class="badge badge-danger badge-counter">3+</span>
    </a>
    <!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in"
      aria-labelledby="alertsDropdown">
      <h6 class="dropdown-header">
        Benachrichtigungen
      </h6>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle bg-primary">
            <i class="fas fa-file-alt text-white"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">December 12, 2019</div>
          <span class="font-weight-bold">A new monthly report is ready to download!</span>
        </div>
      </a>
      <a class="dropdown-item text-center small text-gray-700" href="#">Alle anzeigen</a>
    </div>
  </li>

  <!-- Nav Item - Messages -->
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-envelope fa-fw"></i>
      <!-- Counter - Messages -->
      <span class="badge badge-danger badge-counter">7</span>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in"
      aria-labelledby="messagesDropdown">
      <h6 class="dropdown-header">
        Private Nachrichten
      </h6>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
          <div class="status-indicator bg-success"></div>
        </div>
        <div class="font-weight-bold">
          <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
          <div class="small text-gray-500">Emily Fowler · 58m</div>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
          <div class="status-indicator"></div>
        </div>
        <div>
          <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?
          </div>
          <div class="small text-gray-500">Jae Chun · 1d</div>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
          <div class="status-indicator bg-warning"></div>
        </div>
        <div>
          <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up
            the good work!</div>
          <div class="small text-gray-500">Morgan Alvarez · 2d</div>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
          <div class="status-indicator bg-success"></div>
        </div>
        <div>
          <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this
            to all dogs, even if they aren't good...</div>
          <div class="small text-gray-500">Chicken the Dog · 2w</div>
        </div>
      </a>
      <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
    </div>
  </li>

  <div class="topbar-divider d-none d-sm-block"></div>

  <li class="nav-item dropdown no-arrow small ml-auto">

    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">

      <div class="card">
        <div class="card-body py-1 px-2">

          <div class="media">
            <img class="img-fluid rounded-circle topbar-avatar mr-2" src="{{ Auth::user()->avatar }}" alt="">
            <div class="media-body">
              <div class="small text-gray-500">Eingeloggt als</div>
              <div class="text-gray-900 font-weight-bold">
                {{ Auth::user()->name }}
              </div>
            </div>
          </div>

        </div>
      </div>

    </a>

    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="{{ url('/user/'.Auth::user()->slug) }}">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Dein Profil
      </a>
      <a class="dropdown-item" href="{{ url('/characters') }}">
        <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
        Charaktere
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </li>

  @if (Auth::user()->hasCharacters())

  <li class="nav-item dropdown no-arrow small">
    <a class="nav-link dropdown-toggle" href="#" id="charDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">

      <div class="card">
        <div class="card-body py-1 px-2">

          <div class="media">
            <img class="img-fluid rounded-circle topbar-avatar mr-2"
              src="{{ Auth::user()->active_character()->getAvatar('path') }}" alt="">
            <div class="media-body">
              <div class="small text-gray-500">aktiver Charakter</div>
              <div class="text-gray-900 font-weight-bold">
                <span class="text-gray-700">{{ Auth::user()->active_character()->getRankShortName() }}</span>
                {{ Auth::user()->active_character()->getFullNameAttribute() }}
              </div>
            </div>
          </div>

        </div>
      </div>

    </a>

    <div class="dropdown-list dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="charDropdown">

      @foreach (Auth::user()->characters as $character)
      @if(Auth::user()->active_character()->slug != $character->slug)
      <a class="dropdown-item d-flex align-items-center"
        href="{{ url('/characters/'.$character->slug.'/set-active') }}">
        <div class="dropdown-list-image mr-3">
          <img class="img-fluid rounded-circle mr-1" src="{{ $character->getAvatar('path') }}" alt="">
        </div>
        <div class="font-weight-bold">
          <div class="text-truncate"><span class="text-gray-700">{{ $character->getRankShortName() }}</span>
            {{ $character->getFullNameAttribute() }}</div>
        </div>
      </a>
      @endif
      @endforeach

      <a class="dropdown-item text-center small text-gray-500" href="{{ url('/characters') }}">Charakter-Übersicht</a>

    </div>

  </li>
  @endif

</ul>