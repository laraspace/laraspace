@if (Session::has('flash_notification'))
    @if (Session::has('flash_notification.message'))
    <div class="laraspace-notify hidden-xs-up" data-driver="{{config('laraspace.notification')}}" data-notify="{{ Session::get("flash_notification.level") }}" data-message="{{ Session::get("flash_notification.message") }}">
    </div>
    @else
        @foreach(Session::get("flash_notification") as $flash_notification)
    <div class="laraspace-notify hidden-xs-up" data-driver="{{config('laraspace.notification')}}" data-notify="{{ $flash_notification->level }}" data-message="{{ $flash_notification->message }}">
    </div>
        @endforeach
    @endif
@endif

@if($errors->any())
    <div class="laraspace-notify hidden-xs-up" data-driver="{{config('laraspace.notification')}}" data-notify="error" data-message="{{ $errors->first() }}">
    </div>
@endif