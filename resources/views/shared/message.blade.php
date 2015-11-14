<div class="message">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <div class="alert alert-{{ $msg }} z-depth-1">
                    <div class="alert-message">{!! Session::get('alert-' . $msg) !!}</div>
                    <div class="right-align"><i class="fa fa-times alert-close"></i></div>
                </div>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger z-depth-1 nav-link" data-id="contact">
            <strong>Whoops! Something went wrong!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>