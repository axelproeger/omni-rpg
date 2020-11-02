@extends('layouts.app')

@section('title') Charakter Avatar @endsection

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  @component('components.breadcrumb')
  <li class="breadcrumb-item"><a href="{{ url('/characters') }}">Charaktere</a></li>
  <li class="breadcrumb-item"><a href="{{ url('/characters/' . $character->slug) }}">{{ $character->full_name }}</a>
  </li>
  <li class="breadcrumb-item"><a href="{{ url('/characters/' . $character->slug . '/edit') }}">Charakter bearbeiten</a>
  </li>
  <li class="breadcrumb-item active" aria-current="page">Avatar ändern</li>
  @endcomponent


</div>

<div class="card shadow mb-4">
  <div class="card-body">
    Avatar
  </div>
</div>

<form method="POST" action="{{ url('/characters/' . $character->slug . '/avatar') }}" enctype="multipart/form-data">
  @csrf
  {{ method_field('PATCH') }}

  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Avatar</h6>
    </div>
    <div class="card-body">

      <div class="form-group row text-center">
        <div class="col-sm-6">
          <label>Aktuelles Bild</label><br>
          <img src="{{ $character->getAvatar('path') }}" class="img-fluid rounded" alt="">
        </div>
        <div class="col-sm-6 text-left">
          <label for="avatar">Neues Bild hochladen</label>
          <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" name="avatar">

          @error('avatar')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <div class="alert alert-info mt-4">
            <div class="font-weight-bold">Regeln für den Datei-Upload:</div>
            <div>- Es sind folgende Dateitypen erlaubt: jpeg, jpg & png</div>
            <div>- Die Datei darf maximal 2 MB groß sein.</div>
            <div>- Das Seitenverhältnis muss 1:1 entsprechen. (z.B. 500x500)</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-body">
      <button type="submit" class="btn btn-success">Bild hochladen</button>
      <button type="submit" class="btn btn-danger">Aktuelles Bild löschen</button>
    </div>
  </div>

</form>

@endsection