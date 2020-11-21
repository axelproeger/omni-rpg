<li class="list-group-item">

  <div class="col-lg-12">
    <div class="media d-flex align-items-center">
      <img class="user-avatar rounded-circle mr-3" src="{{ $avatar_url }}">
      <div class="media-body">
        <div class="text-gray-900 font-weight-bold">
          <a href="{{ url('/user/'.$slug) }}">{{ $username }}</a>
        </div>
          <div>
              <span class="text-gray-700" style="font-size: .8rem">
                  Aktiver Charakter: <a href="{{ route('character.show', $activeCharacter->slug) }}">{{ $activeCharacter->fullname }}</a>
              </span>
          </div>
      </div>
    </div>
  </div>

</li>
