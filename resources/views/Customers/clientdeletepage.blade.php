@include('_partials.header');

<div class="delete-container">
    <div class="delete-container-header">
    <h3>Do you want to delete this client?</h3>
    </div>
        <div class="delete-container-content">
            <p>If you want to delete this client, click on <em>Delete</em>. If you wish to cancel, click <em>Cancel</em></p>
        </div>
        <hr>
        <div class="delete-actions">
            <a href="{{route('deleteclient')}}"><button>Delete</button></a>
            <a href="{{route('clientlist')}}"><button>Cancel</button></a>
        </div>
</div>


@include('_partials.footer');
