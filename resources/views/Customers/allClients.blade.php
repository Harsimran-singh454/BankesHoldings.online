@include('_partials.header');


<h1 style="text-align:center; margin:50px">List of Clients</h1>
<table class="clients-table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php $num=0 ?>
        @foreach ($clist as $data)
            <span style="display:none">{{$num ++}}</span>
            <tr>
                <td>{{$num}}.</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['email']}}</td>
                <td>{{$data['account_number']}}</td>
                <td>
                    <a href="{{ route('clientprofile', $data['id']) }}"><button>View</button></a>
                    <a href="{{ route('clientDataAccessForm', $data['id']) }}"><button>Edit</button></a>
                    <a href="{{ route('deleteclient', $data['id']) }}"><button>Delete</button></a>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>


@include('_partials.footer')
