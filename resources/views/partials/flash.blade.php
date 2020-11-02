@if($message = session('message'))

  @php

  list($type, $message) = explode('|', $message);

  switch ($type)
  {
    case 'success':
      $type = 'success';
      break;
    case 'error':
      $type = 'danger';
      break;
    case 'warning':
      $type = 'warning';
      break;
    case 'info':
      $type = 'info';
      break;
  }

  echo sprintf('
    <div class="alert alert-%s alert-dismissible fade show" role="alert">
      %s
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'
  , $type, $message);

  @endphp

@endif
