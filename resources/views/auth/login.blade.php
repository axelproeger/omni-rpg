<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ Settings::get('app-title') }} - Login</title>

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

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-1">{{ Settings::get('app-title') }}</h1>
                    </div>
                    <div class="text-center">
                      <div class="text-gray-900 mb-4">{{ Settings::get('app-subtitle') }}</div>
                    </div>

                    <form class="user" method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group">
                        <input id="email" type="email"
                          class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                          placeholder="E-Mail Adresse" value="{{ old('email') }}" required autocomplete="email"
                          autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input id="password" type="password"
                          class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
                          placeholder="Passwort" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                      </div>

                      <div class="form-group">

                        <div class="custom-control custom-checkbox small">
                          <input id="remember" name="remember" type="checkbox" class="custom-control-input"
                            {{ old('remember') ? 'checked' : '' }}>
                          <label class="custom-control-label" for="remember">Eingeloggt bleiben</label>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-danger btn-user btn-block">
                        Einloggen
                      </button>
                    </form>

                    <hr>
                    <div class="text-center">
                      <a class="small" href="{{ route('password.request') }}">Passwort vergessen?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="{{ url('/register') }}">Beim Rollenspiel anmelden!</a>
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