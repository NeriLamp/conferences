<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<form action="{{route('login') }}" method="POST">
    @csrf
    <div class="form-group">
    <div >
        <label class="form-label" for="input-example-1"  >Name</label>
        <input class="form-input" type="text" id="input-example-1" name="name" value="{{old('name') }}">
        @error('name')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label class="form-label" for="input-example-1" >Password</label>
        <input type="password"  class="form-input" type="text" id="input-example-1" name="password" value="{{old('password') }}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label  type="radio" name="gender">Remember me</label>
        <input  class="form-icon" type="checkbox" id="remember-input" name="remember" value="1" {{old('remember') ? 'checked' : '' }}">
    </div>
    </div>
    <div><input class="btn btn-primary" type="submit" value="Login"></div>
</form>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
