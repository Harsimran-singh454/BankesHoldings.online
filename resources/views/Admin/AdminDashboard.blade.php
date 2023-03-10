@include("./_partials/header")
<title>Dashboard</title>
<body>
    <h1 style="text-align:center; margin:50px">Welcome, {{$info->name}}!</h1>
    <main>
        <div class="wrapper">


            @if($info->role == 'Superadmin')
            <div class="card">

                <div class="ribbon">
                    <h2>Admins</h2>
                    <div>
                        <a href="{{route('AdminRegister')}}"><button>Add</button></a>
                        {{-- <a href="{{route('')}}"><button>View All</button></a> --}}
                    </div>
                </div>

                <div class="items">
                    <ol>
                        @foreach($admin as $adm)
                        <a href="{{ route('updateAdminPage', $adm['id']) }}"><li><h4>{{$adm['name']}}</h4></li></a>
                        @endforeach
                    </ol>
                </div>
            </div>

            @endif

            <div class="card">

                <div class="ribbon">
                    <h2>Cx Online Portal</h2>
                    <div>
                        <a href="{{route('clientnew')}}"><button>Add</button></a>
                        <a href="{{route('clientlist')}}"><button>View All</button></a>
                    </div>
                </div>

                <div class="items">
                    <ol>
                        @foreach($clients as $client)
                        <a href="{{route('clientDataAccessForm', $client['id'])}}"><li><h4>{{ $client['name'] }}</h4></li></a>
                        @endforeach
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="ribbon">
                    <h2>Accounts</h2>
                    <div>
                        <a href="{{route('accountRegisterpage')}}"><button>Add</button></a>
                        <a href="{{route('accountlist')}}"><button>View All</button></a>
                    </div>
                </div>
                <div class="items">
                    <ol>
                        @foreach($accounts as $acc)
                        <a href="{{route('accountDataAccessForm', $acc['id'])}}"><li><h4>{{ $acc['account_owner'] }}</h4></li></a>
                        @endforeach
                    </ol>
                </div>

            </div>

            <div id="quick-actions-card" class="card">
                <div class="ribbon">
                    <h2>Quick Actions</h2>
                </div>
                <div class="items">
                    <ol style="list-style: none; text-align:center; text-decoration: none">
                        <a href="{{route('paymentsCard')}}"target="_blank"><li><h4>Collect $</h4></li></a>
                        <a href="https://cliq.zoho.com/"target="_blank"><li><h4>Cliq</h4></li></a>
                        <a href="https://invoice.zoho.com/"target="_blank"><li><h4>Clock in / Clock out</h4></li></a>
                        <a href="https://saleiq.zoho.com/"target="_blank"><li><h4>Sales IQ (Live chat)</h4></li></a>
                        <a href="https://one.zoho.com/"target="_blank"><li><h4>One</h4></li></a>
                        <a href="https://mail.zoho.com/"target="_blank"><li><h4>E-mail</h4></li></a>
                        <a href="https://app.businessconnect.telus.com/welcome" target="_blank"><li><h4>Telus Business Connect</h4></li></a>
                    </ol>
                </div>

            </div>
        </div>
    </main>

<a href="{{route('changePasswordPageA', $info->id)}}" style="width:100%; text-align-last: end;
    text-decoration: none;
    color: gray;
    display: block;">Change Password</a>
</body>

@include("_partials.footer")
