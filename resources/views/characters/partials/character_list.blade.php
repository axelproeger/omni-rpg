<li class="row list-group-item">
  <div class="col-lg-4">
    <div class="media d-flex align-items-center">
      <img class="character-avatar rounded-circle mr-3" src="{{ $avatar_url }}">
      <div class="media-body">
        <div class="text-gray-900 font-weight-bold">
          @if ($rank_short_name) <span class="text-gray-700" data-toggle="tooltip" data-placement="left"
            title="{{ $rank }}">{{ $rank_short_name }}</span> @endif
          <a href="{{ url('/character/'.$slug) }}">{{ $firstname }} {{ $lastname }}</a>
        </div>
        <div>
          @if ($main_character)
          <span class="badge badge-secondary">Hauptcharakter</span>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="font-weight-bold text-info text-uppercase mb-1">Einheit</div>
    <div>keine Einheit zugewiesen</div>
  </div>
  <div class="col-lg-3">
    <div class="font-weight-bold text-warning text-uppercase mb-1">Status</div>
    <div class="text-warning">warte auf Bestätigung</div>
  </div>
  <div class="col-lg-2 align-self-center">

    <div class="dropdown no-arrow">
      <button class="btn btn-light btn-circle dropdown-toggle" type="button"
        id="character-{{ $character->id }}-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bars"></i>
      </button>
      <div class="dropdown-menu animated--fade-in" aria-labelledby="character-{{ $character->id }}-dropdown"
        x-placement="bottom-start"
        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
        <a class="dropdown-item" href="{{ url('/characters/'.$character->slug.'/edit') }}">Lebenslauf bearbeiten</a>
        <a class="dropdown-item" href="{{ url('/characters/'.$character->slug.'/avatar') }}">Bild ändern</a>
      </div>
    </div>

  </div>
</li>