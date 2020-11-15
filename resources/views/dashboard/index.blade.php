@extends('layouts.app')

@section('title') Dashboard @endsection

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  @component('components.breadcrumb')
  <li class="breadcrumb-item" aria-current="page">Dashboard</li>
  @endcomponent

</div>

<div class="card card-sm shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Hallo {{ auth()->user()->name }}! Schön, dass du hier bist.</h6>
  </div>
  <div class="card-body">
    <div class="row">

      <div class="col">
        
      </div>

    </div>
  </div>

</div>

@endsection