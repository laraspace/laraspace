@if (Session::has('flash_notification.message'))
    <div class="laraspace-notify hidden-xs-up" data-driver="{{config('laraspace.notification')}}" data-notify="{{ Session::get('flash_notification.level') }}" data-message="{{ Session::get('flash_notification.message') }}">
    </div>
@endif

@if($errors->any())
    <div class="laraspace-notify hidden-xs-up" data-driver="{{config('laraspace.notification')}}" data-notify="error" data-message="{{ $errors->first() }}">
    </div>
@endif