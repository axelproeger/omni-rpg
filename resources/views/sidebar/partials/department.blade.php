@if($departments ?? '')

<div class="sidebar-heading">
  Departments
</div>

<li class="nav-item">

@foreach($departments ?? '' as $department)

  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{ $department->slug }}Collapse" aria-expanded="false" aria-controls="{{ $department->slug }}-collapse">
    <i class="fas fa-fw fa-building"></i>
    <span>{{ $department->name }}</span>
  </a>

@endforeach

</li>

<hr class="sidebar-divider">

@endif
