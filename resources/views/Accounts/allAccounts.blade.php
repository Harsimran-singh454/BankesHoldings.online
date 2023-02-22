@include('./_partials.header');
<title>Accounts List</title>

<h1 style="text-align:center; margin:50px">List of Accounts</h1>
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
                    <a href="{{route('updateaccountpage', $acc['id'])}}"><button>View</button></a>
                    <a href="{{route('deleteaccount', $acc['id'])}}"><button>Delete</button></a>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>


@include('_partials.footer')
