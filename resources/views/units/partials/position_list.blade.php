<li class="list-group-item">

    <div class="row">

        <div class="col-md-3">
            <div class="text-gray-900 font-weight-bold">
                {{ $position->name }}
            </div>
        </div>
        <div class="col-md-9">

            @if($position->pivot->character_id)
                @php $character = \App\Models\Character::find($position->pivot->character_id) @endphp

                <div class="media d-flex align-items-center">
                    <img class="character-avatar rounded-circle mr-3" src="{{ $character->getAvatarPath() }}">
                    <div class="media-body">

                        <div class="text-gray-900">
                            @if ($character->getRankShortName())
                                <span class="text-gray-700" data-toggle="tooltip" data-placement="auto"
                                      title="{{ $character->getRankName() }}">
                                    {{ $character->getRankShortName() }}
                                </span> @endif

                            <a href="{{ route('character.show', $character->slug) }}" class="font-weight-bold">{{ $character->firstname }} {{ $character->lastname }}</a>
                        </div>

                    </div>
                </div>
        </div>
        @endisset

        @empty($character)
            nope
        @endempty


    </div>


</li>
