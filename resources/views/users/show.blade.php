@extends('layouts.app')

@section('title') {{ $user->name }} @endsection

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  @component('components.breadcrumb')
  <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/user') }}">Benutzer</a></li>
  <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
  @endcomponent

</div>

<div class="row">

  @if ($user->id == Auth::user()->id)

  <div class="col-12">

    <div class="alert alert-success d-flex align-items-center" role="alert">
      <i class="fas fa-laugh-wink fa-3x mr-4 rotate-n-15"></i> Das bist du
    </div>

  </div>

  @endif

  <div class="col-lg-6">

    <div class="card mb-4 shadow">
      <div class="card-body">
        <div class="row d-flex align-items-center">

          <div class="col-md-3 text-center">
            <img class="img-fluid rounded-circle mb-4 mb-md-0" style="max-height: 100px" src="{{ $user->avatar }}"
              alt="">
          </div>

          <div class="col-md-9 text-center text-md-left">

            <div>
              <h3 class="text-gray-800 font-weight-bold mb-0">{{ $user->name }}</h3>
            </div>

            <div class="text-gray-500">
              {{ '@' . $user->slug }}
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="card shadow mb-4">
      <div class="card-body">

        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-info btn-sm btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-comment"></i>
                    </span>
                    <span class="text">Nachricht senden</span>
                  </a>
            </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Rollen</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">
            @foreach($user->roles as $role)
            <span class="badge badge-pill badge-secondary">{{ ucfirst($role->name) }}</span>
            @endforeach
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Angemeldet</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $user->created_at->format('d.m.Y') }}
            ({{ $user->created_at->diffForHumans() }})</div>
        </div>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Status</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">
            @if($user->isOnline())
            <i class="fas fa-circle text-success fa-xs"></i> online
            @else
            <i class="fas fa-circle text-danger fa-xs"></i> offline
            @endif
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Zuletzt gesehen</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $user->last_action->diffForHumans() }}</div>
        </div>

        <hr>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Realname</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $user->real_name }}</div>
        </div>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Geburtstag</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $user->birth_date }}</div>
        </div>

        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Über mich</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $user->about_me }}</div>
        </div>

      </div>
    </div>
  </div>

  <div class="col-lg-6">

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Charaktere</h6>
      </div>

      <ul class="list-group list-group-flush character-list">

        @forelse ($user->characters as $character)

        @include('users.partials.character_list', [
        'avatar_url' => $character->getAvatar('path'),
        'rank' => $character->getRankName(),
        'rank_short_name' => $character->getRankShortName(),
        'firstname' => $character->firstname,
        'lastname' => $character->lastname,
        'slug' => $character->slug,
        'main_character' => $character->main_character,
        ])

        @empty

        <li class="list-group-item">
          <em>{{ $user->name }} hat noch keine Charaktere erstellt.</em>
        </li>

        @endforelse
      </ul>

    </div>

    <div class="card shadow mb4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Statistik</h6>
      </div>
      <div class="card-body">
        WIP
      </div>
    </div>

  </div>

</div>

</div>
</div>

@endsection