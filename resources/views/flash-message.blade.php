@if ($message = Session::get('success'))
    <div class="container mt-4 ">
        <div class="alert alert-success flash-alert" role="alert">
        <button type = "button" class = "btn-close" style="color:#fff ;" data-bs-dismiss = "alert" id = "close"> </button>
        <strong>{{ $message }} <i class="fa-solid fa-face-smile"></i></strong>
        </div>
    </div>
@endif
