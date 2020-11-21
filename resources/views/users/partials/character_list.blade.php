<li class="list-group-item">

  <div class="col-lg-12">
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

</li>
