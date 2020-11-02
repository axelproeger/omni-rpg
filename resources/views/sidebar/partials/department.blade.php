@if($departments ?? '')

<div class="sidebar-heading">
  Departments
</div>

<li class="nav-item">

@foreach($departments ?? '' as $department)

  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#deptCollapse" aria-expanded="false" aria-controls="deptCollapse">
    <i class="fas fa-fw fa-cog"></i>
    <span>{{ $department->name }}</span>
  </a>

@endforeach

</li>

<hr class="sidebar-divider">

@endif