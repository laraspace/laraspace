<form action="" id="registerForm" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype Password">
    </div>
    <button class="btn btn-login btn-full">Register</button>
</form>