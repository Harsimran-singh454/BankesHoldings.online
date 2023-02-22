<head>
@include('/_partials/header')
<title>Add a New Admin</title>
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

            <div class="log-form-elements">
                <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
                </div>
                @error('name')**{{$message}}  @enderror
                <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                @error('email')**{{$message}}  @enderror
                <div>
                <label for="password"> Password: </label>
                <input type="password" name="password" id="password">
                </div>

                <input class="log-btn" value="sign up" type="submit">

            </div>
        </form>
    </div>
</body>
@include("_partials.footer")
