<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/style.css">
    <script src="/main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    <header>
            <img src="/logof.png">
    </header>

    <nav>
        <div class="nav-list">
            @if(Session::has('LoggedUser'))
            <a href="{{route('Dashboard')}}">Home</a>

            @elseif(Session::has('LoggedClient'))
            <a href="{{route('clientprofile')}}">Home</a>
            @endif
        </div>


        @if(Session::has('LoggedUser'))


        <div class="nav-dropdown">
            <div class="nav-dropdown-menu hide" id="menu">
                <ul>
                    <li><a href="{{route('Dashboard')}}">Profile</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
            <img src="/usericon.svg" alt="" onclick="toggle();">
        </div>

        @elseif(Session::has('LoggedClient'))


        <div class="nav-dropdown">
            <div class="nav-dropdown-menu hide" id="menu">
                <ul>
                    <li><a href="{{route('clientprofile')}}">Profile</a></li>
                    <li><a href="{{route('Clogout')}}">Logout</a></li>
                </ul>
            </div>
        </div>
        <img src="/usericon.svg" alt="" onclick="toggle();">


        @endif




        {{-- -------------------TIMER------------------------ --}}

        {{-- @if(Session::has('LoggedUser'))
        <div class="timer">
            <div class="controls">
                <button class="check-in" onclick="startStop()">Check In</button>
                <button class="check-out" onclick="startStop()">Check Out</button>
                <button class="reset" onclick="resetTimer()">Reset</button>
            </div>
            <h2 id="time">00:00:00</h2>
        </div>
        @endif --}}


    </nav>

</body>
</html>
