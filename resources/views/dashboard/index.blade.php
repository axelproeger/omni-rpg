@extends('layouts.app')

@section('title') Dashboard @endsection

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        @component('components.breadcrumb')
            <li class="breadcrumb-item" aria-current="page">Dashboard</li>
        @endcomponent

    </div>

    <div class="row">

        <div class="col-md-8">

            <div class="card card-sm shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hallo {{ auth()->user()->name }}</h6>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col">

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="card card-sm shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Wer ist gerade Aktiv?</h6>
                </div>
                <ul class="list-group list-group-flush user-list">

                    @foreach($activeUsers as $user)

                        @include('users.partials.user_list', [
                        'avatar_url' => $user->getAvatarPath(),
                        'username' => $user->name,
                        'slug' => $user->slug,
                        'activeCharacter' => $user->activeCharacter(),
                        ])

                    @endforeach

                </ul>

            </div>

        </div>

    </div>


@endsection
