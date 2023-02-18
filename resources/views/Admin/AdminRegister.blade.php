<head>
@include('/_partials/header')
<title>Admin Registration</title>
<head>

<body>
    <div class="form-container">
        <h1>Admin Registration</h1>
        <form action="{{ route('admcreate') }}" method="POST">

        @if(Session::get('Success'))
        <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
        @endif

        @if(Session::get('Fail'))
        <p style="background-color:red; padding:10px">{{Session::get('Fail')}}</p>
        @endif
        @csrf

            <div class="adminlog-form-elements">

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
                <br>
                @error('name')**{{$message}}  @enderror
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{old('email')}}">
                <br>
                @error('email')**{{$message}}  @enderror
                <label for="password"> Password: </label>
                <input type="password" name="password" id="password">
                <br>
                <input class="log-btn" value="sign up" type="submit">

            </div>
        </form>
    </div>
</body>
@include("_partials.footer")
