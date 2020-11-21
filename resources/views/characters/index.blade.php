@extends('layouts.app')

@section('title') Charaktere @endsection

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  @component('components.breadcrumb')
  <li class="breadcrumb-item" aria-current="page">Charaktere</li>
  @endcomponent

  @if (Auth::user()->characters->count() >= Auth::user()->character_slots)
  <a href="{{ url('/characters/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm disabled"
    role="button" aria-disabled="true">
    <i class="fas fa-plus fa-sm text-white-50"></i> Charakter erstellen
  </a>
  @else
  <a href="{{ url('/characters/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"
    role="button">
    <i class="fas fa-plus fa-sm text-white-50"></i> Charakter erstellen
  </a>
  @endif

</div>

<div class="card shadow mb-4">
  <div class="card-body">
    Auf dieser Seite kannst du deine Charaktere verwalten.<br>
    Genutzte Charakter-Slots:
    <strong>{{ Auth::user()->characters->count() }}/{{ Auth::user()->character_slots }}</strong>
  </div>
</div>

@forelse ($characters as $key => $characters)

@switch ($key)

@case('PC')
<div class="card shadow mb-4 border-left-warning">
  <div class="card-body">

    <ul class="list-group list-group-flush character-list">

      <div class="font-weight-bold text-warning text-uppercase mb-1">Spieler Charaktere</div>
      @break

      @case('AC')
      <div class="card shadow mb-4 border-left-danger">
        <div class="card-body">

          <ul class="list-group list-group-flush character-list">

            <div class="font-weight-bold text-danger text-uppercase mb-1">Administrative Charaktere</div>
            @break

            @case('NPC')
            <div class="card shadow mb-4 border-left-info">
              <div class="card-body">

                <ul class="list-group list-group-flush character-list">

                  <div class="font-weight-bold text-info text-uppercase mb-1">Nicht-Spieler Charaktere</div>
                  @break

                  @default

                  <div class="card shadow mb-4 border-left-secondary">
                    <div class="card-body">

                      <ul class="list-group list-group-flush character-list">

                        <div class="font-weight-bold text-secondary text-uppercase mb-1">Neue Charaktere</div>

                        @endswitch

                        @foreach ($characters as $character)

                        @include('characters.partials.character_list', [
                        'avatar_url' => $character->getAvatarPath(),
                        'rank' => $character->getRankName(),
                        'rank_short_name' => $character->getRankShortName(),
                        'firstname' => $character->firstname,
                        'lastname' => $character->lastname,
                        'slug' => $character->slug,
                        'main_character' => $character->main_character,
                        ])

                        @endforeach

                      </ul>

                    </div>
                  </div>

                  @empty

                  <div class="card shadow mb-4 border-left-warning">
                    <div class="card-body">

                      <ul class="list-group list-group-flush character-list">

                        <li class="list-group-item">
                          <em>Du hast noch keine Charaktere erstellt... worauf wartest du?</em>
                        </li>

                      </ul>

                    </div>
                  </div>

                  @endforelse

                  @endsection
