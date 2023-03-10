@include('_partials.header');
<title>Clients List</title>

<h1 style="text-align:center; margin:50px">List of Clients</h1>

<form action="{{ route('searchclnt') }}" method="post">
    @csrf
<div class = "client-search">
    <label for="lookClient">Search Client: </label>
    <input type="text" name="lookClient" placeholder="Enter the Client's name...">
    <input id="search-btn" type="submit" value="search">
</div>
@if (Session::has('fail'))
    <p style="text-align:center">{{Session('fail')}}</p>
@endif
</form>

<table class="clients-table">
    <thead>
        <tr>
            <th>Account Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($clist as $data)
            <tr>
                <td>{{$data['account_number']}}</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['email']}}</td>
                <td>
                    <a href="{{ route('clientDataAccessForm', $data['id']) }}"><button>Edit</button></a>
                    <a href="{{ route('deleteclient', $data['id']) }}"><button>Delete</button></a>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>


@include('_partials.footer')
