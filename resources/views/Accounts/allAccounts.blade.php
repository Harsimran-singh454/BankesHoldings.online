@include('./_partials.header');
<title>Accounts List</title>

<h1 style="text-align:center; margin:50px">List of Accounts</h1>

<form action="{{ route('searchacc') }}" method="post">
    @csrf
<div class = "client-search">
    <label for="lookAccount">Search Account: </label>
    <input type="text" name="lookAccount" placeholder="Enter the account number...">
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
            <th>Account Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($list as $acc)
            <tr>
                <td>{{$acc['account_number']}}</td>
                <td>{{$acc['account_name']}}</td>
                <td>
                    <a href="{{route('accountDataAccessForm', $acc['id'])}}"><button>View</button></a>
                    <a href="{{route('deleteaccount', $acc['id'])}}"><button>Delete</button></a>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>


@include('_partials.footer')
