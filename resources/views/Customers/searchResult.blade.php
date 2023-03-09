@include('_partials.header');
<title>Clients List</title>

<h1 style="text-align:center; margin:50px">Search Result</h1>


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
            <tr>
                <td>{{$data['account_number']}}</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['email']}}</td>
                <td>
                    <a href="{{ route('clientDataAccessForm', $data['id']) }}"><button>Edit</button></a>
                    <a href="{{ route('deleteclient', $data['id']) }}"><button>Delete</button></a>
                </td>
            </tr>
    </tbody>
</table>


@include('_partials.footer')
