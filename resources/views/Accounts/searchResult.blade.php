@include('./_partials.header');
<title>Accounts List</title>

<h1 style="text-align:center; margin:50px">Search Result</h1>
<table class="clients-table">
    <thead>
        <tr>
            <th>Account Number</th>
            <th>Account Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
            <tr>
                <td>{{$data['account_number']}}</td>
                <td>{{$data['account_name']}}</td>
                <td>
                    <a href="{{route('accountDataAccessForm', $data['id'])}}"><button>View</button></a>
                    <a href="{{route('deleteaccount', $data['id'])}}"><button>Delete</button></a>
                </td>
            </tr>



    </tbody>
</table>


@include('_partials.footer')
