<head>
    @include('/_partials/header')
    <title>Edit Admin</title>
    <head>

    <body>
        <div class="form-container">
            <h1>Edit {{$Admin->name}}</h1>
            <form action="{{ route('updateAdmin', $Admin->id)}}" method="POST">

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
                    <input type="text" name="name" id="name" value="{{$Admin->name}}">
                    </div>
                    @error('name')**{{$message}}  @enderror

                    <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" value="{{$Admin->email}}">
                    </div>
                    @error('email')**{{$message}}  @enderror

                    <div>
                    <label for="role">Role:</label>
                    <select required style="margin:10px;
                                    padding:20px;
                                    border-radius:20px;
                                    width:500px;
                                    border: 0.1px solid black;
                                    font-size: 19px;"
                                    id="account_number" name="role" value="{{$Admin->role}}">
                            <option value="">-- Choose role -- </option>
                            <option value="Superadmin">Admin L1</option>
                            <option value="">Admin L2</option>
                    </select>
                    </div>

                    <div>
                    <label for="password"> Password: </label>
                    <input type="password" name="password" id="password" value="{{$Admin->password}}">
                    </div>


                    <div class="status">
                        <h3>Status:</h3>
                        <label class="switch">
                            <input type="checkbox" name="status" value="active">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <input class="log-btn" value="Save" type="submit">

                </div>
            </form>
        </div>
    </body>
    @include("_partials.footer")
