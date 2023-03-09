<head>
    @include('/_partials/header')
    <title>Edit {{$users['name']}}</title>
    <head>

    <body>
        <div class="form-container">
            <h1 style="text-align:center">Edit {{$users['name']}}'s Info</h1>
            <form action="{{ route('update', $users['id']) }}" method="POST">
                @csrf

                <div class="log-form-elements">

                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{$users['name']}}">
                    <br>
                    @error('name'){{$message}}  @enderror

                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" value="{{$users['email']}}">
                    <br>
                    @error('email'){{$message}}  @enderror

                    <Label for="account_number">Account Number: </Label>
                    <input disabled value="{{$users['account_number']}}">


                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" value="{{$users['password']}}">
                    <br>

                    @error('passowrd'){{$message}}  @enderror

                    <input class="log-btn" value="Save" type="submit">


                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach


                </div>
            </form>
        </div>
    </body>
    @include("_partials.footer")
