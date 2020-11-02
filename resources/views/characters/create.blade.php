@extends('layouts.app')

@section('title') Charakter erstellen @endsection

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  @component('components.breadcrumb')
  <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/characters') }}">Charaktere</a></li>
  <li class="breadcrumb-item active" aria-current="page">Charakter erstellen</li>
  @endcomponent


</div>

<div class="card shadow mb-4">
  <div class="card-body">
    Einleitung
  </div>
</div>

<form method="POST" action="{{ url('/characters') }}">
  @csrf

  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Biografische Daten</h6>
    </div>
    <div class="card-body">

      <div class="form-group row">
        <label for="firstname" class="col-sm-2 col-form-label">Vorname</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
            name="firstname" placeholder="Vorname" value="{{ old('firstname') }}">

          @error('firstname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="lastname" class="col-sm-2 col-form-label">Nachname</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname"
            placeholder="Nachname" value="{{ old('lastname') }}">

          @error('lastname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="birthday" class="col-sm-2 col-form-label">Geburtstag</label>
        <div class="col-sm-10">
          <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday"
            placeholder="Geburtstag" value="{{ old('birthday') }}">

          @error('birthday')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="birthplace" class="col-sm-2 col-form-label">Geburtsort</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('birthplace') is-invalid @enderror" id="birthplace"
            name="birthplace" placeholder="Geburtsort" value="{{ old('birthplace') }}">

          @error('birthplace')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="home_planet" class="col-sm-2 col-form-label">Heimatplanet</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('home_planet') is-invalid @enderror" id="home_planet"
            name="home_planet" placeholder="Heimatplanet" value="{{ old('home_planet') }}">

          @error('home_planet')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="family_status" class="col-sm-2 col-form-label">Familienstand</label>
        <div class="col-sm-10">
          <select class="form-control @error('family_status') is-invalid @enderror" id="family_status"
            name="family_status">
            <option @if (old('family_status')=='ledig' ) selected @endif>ledig</option>
            <option @if (old('family_status')=='verheiratet' ) selected @endif>verheiratet</option>
            <option @if (old('family_status')=='getrennt lebend' ) selected @endif>getrennt lebend</option>
            <option @if (old('family_status')=='geschieden' ) selected @endif>geschieden</option>
            <option @if (old('family_status')=='verwitwet' ) selected @endif>verwitwet</option>
          </select>

          @error('family_status')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="father" class="col-sm-2 col-form-label">Vater</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('father') is-invalid @enderror" id="father" name="father"
            placeholder="Vater" value="{{ old('father') }}">

          @error('father')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="mother" class="col-sm-2 col-form-label">Mutter</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('mother') is-invalid @enderror" id="mother" name="mother"
            placeholder="Mutter" value="{{ old('mother') }}">

          @error('mother')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="siblings" class="col-sm-2 col-form-label">Geschwister</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('siblings') is-invalid @enderror" id="siblings" name="siblings"
            placeholder="Geschwister" value="{{ old('siblings') }}">

          @error('siblings')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="children" class="col-sm-2 col-form-label">Kinder</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('children') is-invalid @enderror" id="children" name="children"
            placeholder="Kinder" value="{{ old('children') }}">

          @error('children')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Physische Daten</h6>
    </div>
    <div class="card-body">

      <div class="form-group row">
        <label for="gender" class="col-sm-2 col-form-label">Geschlecht</label>
        <div class="col-sm-10">
          <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
            <option @if (old('gender')=='geschlechtslos' ) selected @endif>geschlechtslos</option>
            <option @if (old('gender')=='männlich' ) selected @endif>männlich</option>
            <option @if (old('gender')=='weiblich' ) selected @endif>weiblich</option>
            <option @if (old('gender')=='androgyn' ) selected @endif>androgyn</option>
            <option @if (old('gender')=='divers' ) selected @endif>divers</option>
          </select>

          @error('gender')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="species" class="col-sm-2 col-form-label">Spezies</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('species') is-invalid @enderror" id="species" name="species"
            placeholder="Spezies" value="{{ old('species') }}">

          @error('species')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="stature" class="col-sm-2 col-form-label">Statur</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('stature') is-invalid @enderror" id="stature" name="stature"
            placeholder="Statur" value="{{ old('stature') }}">

          @error('stature')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="hair_color" class="col-sm-2 col-form-label">Haarfarbe</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('hair_color') is-invalid @enderror" id="hair_color"
            name="hair_color" placeholder="Haarfarbe" value="{{ old('hair_color') }}">

          @error('hair_color')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="eye_color" class="col-sm-2 col-form-label">Augenfarbe</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('eye_color') is-invalid @enderror" id="eye_color"
            name="eye_color" placeholder="Augenfarbe" value="{{ old('eye_color') }}">

          @error('eye_color')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="height" class="col-sm-2 col-form-label">Größe</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('height') is-invalid @enderror" id="height" name="height"
            placeholder="Größe" value="{{ old('height') }}">

          @error('height')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="weight" class="col-sm-2 col-form-label">Gewicht</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight"
            placeholder="Gewicht" value="{{ old('weight') }}">

          @error('weight')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="physical_characteristics" class="col-sm-2 col-form-label">Besondere Merkmale</label>
        <div class="col-sm-10">
          <textarea type="textarea"
            class="form-control @error('physical_characteristics') is-invalid @enderror autosize"
            id="physical_characteristics" name="physical_characteristics"
            placeholder="Besondere Merkmale">{{ old('physical_characteristics') }}</textarea>

          @error('physical_characteristics')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="race_characteristics" class="col-sm-2 col-form-label">Rassenspezifische Merkmale</label>
        <div class="col-sm-10">
          <textarea type="textarea" class="form-control @error('race_characteristics') is-invalid @enderror autosize"
            id="race_characteristics" name="race_characteristics"
            placeholder="Rassenspezifische Merkmale">{{ old('race_characteristics') }}</textarea>

          @error('race_characteristics')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Charaktereigenschaften</h6>
    </div>
    <div class="card-body">

      <div class="form-group row">
        <label for="strengths" class="col-sm-2 col-form-label">Stärken</label>
        <div class="col-sm-10">
          <textarea type="textarea" class="form-control @error('strengths') is-invalid @enderror autosize"
            id="strengths" name="strengths" placeholder="Stärken">{{ old('strengths') }}</textarea>

          @error('strengths')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="weaknesses" class="col-sm-2 col-form-label">Schwächen</label>
        <div class="col-sm-10">
          <textarea type="textarea" class="form-control @error('weaknesses') is-invalid @enderror autosize"
            id="weaknesses" name="weaknesses" placeholder="Schwächen">{{ old('weaknesses') }}</textarea>

          @error('weaknesses')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="characteristics" class="col-sm-2 col-form-label">Charakteristika</label>
        <div class="col-sm-10">
          <textarea type="textarea" class="form-control @error('characteristics') is-invalid @enderror autosize"
            id="characteristics" name="characteristics"
            placeholder="Charakteristika">{{ old('characteristics') }}</textarea>

          @error('characteristics')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Interessen</h6>
    </div>
    <div class="card-body">

      <div class="form-group row">
        <label for="interests" class="col-sm-2 col-form-label">Interessen</label>
        <div class="col-sm-10">
          <textarea type="textarea" class="form-control @error('interests') is-invalid @enderror autosize"
            id="interests" name="interests" placeholder="Interessen">{{ old('interests') }}</textarea>

          @error('interests')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Lebenslauf</h6>
    </div>
    <div class="card-body">

      <div class="form-group">
        <textarea type="textarea" class="form-control @error('cv') is-invalid @enderror autosize" id="cv" name="cv"
          placeholder="Lebenslauf">{{ old('cv') }}</textarea>

        @error('cv')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-body">
      <button type="submit" class="btn btn-success">Charakter erstellen</button>
    </div>
  </div>

</form>

@endsection