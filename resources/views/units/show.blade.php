@extends('layouts.app')

@section('title') {{ $unit->name }} @endsection

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        @component('components.breadcrumb')
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('unit.index') }}">Einheiten</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $unit->name }}</li>
        @endcomponent

    </div>

    <div class="row">

        <div class="col">

            <div class="profile-head mb-4">
                <h2>
                    {{ $unit->prefix }} <span
                        class="font-weight-bold">{{ $unit->name }}</span>
                </h2>

                <div class="row">
                    <div class="col-auto">
                        <span class="font-weight-normal">Status:</span>
                        @if($unit->active)
                            <span class="text-success">Aktiv</span>
                        @elseif($unit->active == 2)
                            <span class="text-gray-600">Inaktiv</span>
                        @endif

                    </div>

                    <div class="col-auto">
                        <span data-toggle="tooltip" data-placement="auto"
                              title="{{ $unit->created_at->format('d.m.Y H:i') }}">Erstellt {{ $unit->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col">

            <div class="card card-sm shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Posten</h6>
                </div>

                    @foreach($unit->positions as $position)

                        @include('units.partials.position_list', ['position' => $position])

                    @endforeach

            </div>

        </div>
    </div>


@endsection
