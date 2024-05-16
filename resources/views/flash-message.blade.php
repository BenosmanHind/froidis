@if ($message = Session::get('success'))
    <div class="container mt-4">
        <div class="alert alert-success flash-alert" role="alert">
            {{ $message }}
          </div>
    </div>
@endif
