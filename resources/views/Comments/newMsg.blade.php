<head>
    @include('/_partials/header')
    <title>Add a Comment</title>
</head>

<h1 style="text-align: center; margin:1em auto;">Add Comment for {{$account['account_owner']}}'s Account</h1>
<div class="remarks">
    <form action="{{ route('addMessage', $account['id'])}}" method="POST">
        @csrf
        <fieldset>
        <legend><h2>Comment</h2></legend>
        {{-- <p style="color: grey; text-align:center">This comment was added on - {{$mesg->time}}</p> --}}
        <div>
            <label for="added_by">Who's writing?: </label>
            <input type="text" name="added_by" id="" placeholder="your name here..." required>
        </div>
        <div>
            <label for="remarks">Comment:</label>
            <textarea name="remarks" id="msg" cols="90" rows="7" placeholder="Type comment here..." required></textarea>
        </div>
        <div>
            <label for="time">Date-time:</label>
            <input name="time" type="text" value="{{now("America/Toronto")->toDateTimeString()}}">
        </div>
        <div>
            <input type="submit" value="Add" class="sub-btn">
        </div>
        </fieldset>
    </form>
</div>




@include("_partials.footer")
