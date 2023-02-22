<head>
@include('/_partials/header')
<title>User Registration</title>
<head>

<body>
    <div class="form-container">
        <h1>User Registration</h1>
        <form action="{{ route('clientcreate') }}" method="POST">

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
                @error('name'){{$message}}  @enderror

                <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                @error('email'){{$message}}  @enderror

                <div>
                <Label for="account_number">Account Number: </Label>
                    <select style="margin:10px; padding:20px; border-radius:20px; width:16em; border: 0.1px solid black;
                    font-size: 19px;" id="account_number" name="account_number">
                            <option value="">-- Choose account -- </option>
                            @foreach ($acc as $ac)

                            <option value="{{$ac['account_number']}}">{{$ac['account_number']}}</option>
                            @endforeach
                    </select>
                </div>

                <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                </div>

                @error('passowrd'){{$message}}  @enderror

                <input class="log-btn" value="Activate" type="submit">

                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
            </div>
        </form>
    </div>
</body>
@include("_partials.footer")
