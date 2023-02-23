<head>
    @include('/_partials/header')
    <title>Change Password</title>
</head>
<body>
    <div class="form-container">

    <h1>Change Your Password</h1>
@if (session::has('LoggedClient'))
<form action="{{ route('changePassword', $data['id']) }}" method="POST" name="changePwd">
@endif

@if (session::has('LoggedUser'))
<form action="{{ route('changePasswordA', $data['id']) }}" method="POST" name="changePwd">
@endif


    @if(Session::get('Success'))
    <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('fail'))
    <p style="background-color:red; padding:10px">{{Session::get('fail')}}</p>
    @endif
    @csrf

        <div class="log-form-elements">

        <div>
            <label for="password"> Password: </label>
            <input type="password" name="password" id="password" required>
            @error('password')**{{$message}}@enderror
        </div>

        <div>
            <label for="confirm_password"> Confirm Your Password: </label>
            <input type="password" name="confirm_password" id="confirm_password" required>
            @error('confirm_password')**{{$message}}@enderror
        </div>
            <input class="log-btn" value="Login" type="submit">

        </div>
    </form>
</div>

<script>


var changepwd = document.forms.changepwd();
    changepwd.addEventListener('onsubmit',processData);

    function processData(){
        alert("Pressed");
    }


</script>
</body>
