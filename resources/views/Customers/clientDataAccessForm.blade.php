@include('_partials.header');

<div class="form-container">
    <h1>Security Verification</h1>
    <form action="{{ route('grantAccessClient', $id->id)}}" method="POST">

    @if(Session::get('Success'))
    <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('fail'))
    <p style="background-color:red; padding:10px">{{Session::get('fail')}}</p>
    @endif
    @csrf
        <h2>{{$id->name}}'s Account</h2>
        <div class="Userlog-form-elements">
            <label for="pin"> Enter Admin Pin: </label>
            <input type="pin" name="pin" id="pin">
            <br>
            <input class="log-btn" value="Access" type="submit">

        </div>
    </form>
</div>

@include('_partials.footer');
