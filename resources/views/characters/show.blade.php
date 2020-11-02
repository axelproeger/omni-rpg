@extends('layouts.app')

@section('title') {{ $character->getFullNameAttribute() }} @endsection

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  @component('components.breadcrumb')
  <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/characters') }}">Charaktere</a></li>
  <li class="breadcrumb-item active" aria-current="page">{{ $character->getFullNameAttribute() }}</li>
  @endcomponent

</div>

<div class="row px-5 d-flex align-items-center">

  <div class="col-md-2 mb-4">
    <img class="img-fluid rounded mr-4 text" src="{{ $character->getAvatar('path') }}" alt="">
  </div>

  <div class="col-md-10 mb-4">

    <div>
      <h5 class="text-gray-700 font-weight-bold">{{ $character->getRankName() }}</h5>
      <h2 class="text-gray-900 font-weight-bold">{{ $character->getFullNameAttribute() }}</h2>
      <div><b>{POSTEN}</b> der <b>{EINHEIT}</b></div>
    </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-5 col-xl-4">

    <div class="card shadow mb-4">
      <div class="card-body">
        Hier steht was... bald... versprochen...
      </div>
    </div>

  </div>

  <div class="col-lg-7 col-xl-8">

    <card-tabs v-cloak>
      <card-tab name="Charakterblatt" :selected="true">

        <h5 class="text-gray-800 font-weight-bold border-bottom">Biografische Daten</h5>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Name</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->getFullNameAttribute() }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Geburtstag</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->birthday }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Geburtsort</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->birthplace }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Heimatplanet</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->home_planet }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Familienstand</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->family_status }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Vater</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->father }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Mutter</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->mother }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Geschwister</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->siblings }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Kinder</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->children }}</div>
        </div>

        <h5 class="text-gray-800 font-weight-bold mt-3 border-bottom">Physische Daten</h5>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Geschlecht</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->gender }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Spezies</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->species }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Statur</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->stature }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Haarfarbe</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->hair_color }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Augenfarbe</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->eye_color }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Größe</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->height }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Gewicht</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->weight }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Besondere Merkmale</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->physical_characteristics }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Rassenspezifische Merkmale</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->race_characteristics }}</div>
        </div>

        <h5 class="text-gray-800 font-weight-bold mt-3 border-bottom">Charaktereigenschaften</h5>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Stärken</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->strengths }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Schwächen</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->weaknesses }}</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Charakteristika</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->characteristics }}</div>
        </div>

        <h5 class="text-gray-800 font-weight-bold mt-3 border-bottom">Interessen</h5>
        <div class="row">
          <div class="col-md-4 col-xl-3"><label class="font-weight-bold">Interessen</label></div>
          <div class="col-md-8 col-xl-9 text-gray-800 mb-2">{{ $character->interests }}</div>
        </div>

      </card-tab>
      <card-tab name="Lebenslauf">

        <div class="row">
          <div class="col-12 text-gray-800">{{ $character->cv }}</div>
        </div>

      </card-tab>
      <card-tab name="Personalakte">
        Personalakte
      </card-tab>
      <card-tab name="Medizinische Akte">
        Medizinische Akte
      </card-tab>
    </card-tabs>

  </div>

</div>


@endsection