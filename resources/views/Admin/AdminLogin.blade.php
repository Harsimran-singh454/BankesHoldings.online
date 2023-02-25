<head>
@include('/_partials/header')
<title>Admin Login</title>
<head>

<body>
    <div class="form-container">
        <h1>Admin Login</h1>
        <form action="{{ route('admlg') }}" method="POST">


        @if(Session::get('Success'))
        <p style="background-color:rgba(119, 255, 119, 0.578); padding:15px 10px">{{Session::get('Success')}}</p>
        @endif

        @if(Session::get('fail'))
        <p style="color: white; background-color:rgba(255, 0, 0, 0.512); padding:3em 0px;
                 display:flex; justify-content: center; margin: 10px auto;
                 border-radius:30px">{{Session::get('fail')}}</p>
        @endif
        @csrf

            <div class="log-form-elements">
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
                @error('email')**{{$message}}@enderror
            </div>

            <div>
                <label for="password"> Password: </label>
                <input type="password" name="password" id="password">
                @error('password')**{{$message}}@enderror
            </div>
                <input class="log-btn" value="Login" type="submit">
            </div>
            <p>Are you a client? <a href="{{route('cltlogin')}}"> Click here </a>to login</p>
        </form>
    </div>
</body>
@include("_partials.footer")
