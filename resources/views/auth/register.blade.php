<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name') }} - Registrieren</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-login">

  <div id="app">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-12 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-1">{{ Settings::get('app-title') }}</h1>
                    </div>
                    <div class="text-center">
                      <div class="text-gray-900 mb-4">{{ Settings::get('app-subtitle') }}</div>
                    </div>

                    <hr>

                    <div class="text-left">
                      <div class="mb-2">
                        Auf dieser Seite kannst du dich für {{ Settings::get('app-title') }} anmelden.<br>
                        <b>Die Teilnahme am Rollenspiel ist kostenlos.</b>
                      </div>
                      <div class="mb-4">
                        Bitte wähle einen Benutzernamen aus, deinen Rollenspielcharakter erstellst du später.
                      </div>
                    </div>

                    <form class="user" method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="form-group">
                        <input id="name" type="text" placeholder="Benutzername"
                          class="form-control form-control-user @error('name') is-invalid @enderror" name="name"
                          value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input id="email" type="email" placeholder="E-Mail Adresse"
                          class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                          value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group row">

                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input id="password" type="password" placeholder="Passwort"
                            class="form-control form-control-user @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror

                        </div>

                        <div class="col-sm-6">
                          <input id="password-confirm" type="password" placeholder="Passwort wiederholen"
                            class="form-control form-control-user" name="password_confirmation" required
                            autocomplete="new-password">
                        </div>

                      </div>

                      <div class="form-group">

                        <div class="custom-control custom-checkbox small">
                          <input id="privacy" name="privacy" type="checkbox"
                            class="custom-control-input form-control @error('privacy') is-invalid @enderror"
                            {{ old('privacy') ? 'checked' : '' }}>
                          <label class="custom-control-label" for="privacy">Ich habe die <a class="font-weight-bold"
                              href="{{ url('/datenschutz') }}">Datenschutzerklärung</a> gelesen, verstanden und bin
                            einverstanden.</label>

                          @error('privacy')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror

                        </div>

                      </div>

                      <button type="submit" class="btn btn-danger btn-user btn-block">
                        Kostenlos registrieren
                      </button>
                    </form>

                    <hr>
                    <div class="text-center">
                      <a class="small" href="{{ url('/login') }}">Du hast bereits einen Account?</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="login--footer text-center">
            <div>&copy; {{ now()->year }} {{ Settings::get('app-title') }}</div>
            <div>Powered by <a href="https://www.omni-rpg.de">Omni-RPG</a> Rollenspiel Software</div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>