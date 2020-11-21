@if($unitGroups ?? '')

<li class="nav-item">

    <div id="sidebarUnitHeading" class="sidebar-heading">
        Einheiten
    </div>

@foreach($unitGroups ?? '' as $unitGroup)

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{ $unitGroup->slug }}-collapse" aria-expanded="false" aria-controls="{{ $unitGroup->slug }}-collapse">
            <i class="fas fa-fw fa-hand-spock"></i>
            <span>{{ $unitGroup->name }}</span>
        </a>

        <div id="{{ $unitGroup->slug }}-collapse" class="collapse" aria-labelledby="sidebarUnitHeading" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                @foreach($unitGroup->units as $unit)
                    <a class="collapse-item" href="{{ route('unit.show', $unit->slug) }}"><small>{{ $unit->prefix }}</small> {{ $unit->name }}</a>
                @endforeach

            </div>
        </div>

@endforeach

</li>

<hr class="sidebar-divider">

@endif
