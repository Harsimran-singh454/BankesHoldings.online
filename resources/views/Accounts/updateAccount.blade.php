<head>
    @include('/_partials/header')
    <title>{{$account['account_owner']}}'s Account</title>
</head>


@if($info->role == 'Superadmin')


    <body>
        <div class="form-container">
            <h1 style="text-align: center;">{{$account['account_owner']}}'s Details</h1>

            <form class="acc-form" action="{{ route('updateaccount',$account['id']) }}" method="POST">

                @csrf

                <div class = "pi-section">
                    <fieldset>
                        <legend><h2>Personal Information</h2></legend>
                        <label for="account_number">Account Number:</label>
                        <input type="number" name="account_number" id="account_number" value="{{$account['account_number']}}">
                        <br>

                        <label for="account_name">Account Name:</label>
                        <input type="text" name="account_name" id="account_name" value="{{$account['account_name']}}">
                        <br>

                        <label for="phone_number">Phone number:</label>
                        <input type="number" name="phone_number" id="phone_number" value="{{$account['phone_number']}}">
                        <br>

                        <label for="address">Address:</label> <br>
                        <input style="width:100%;" rows="4" cols="50" type="text" name="address" id="address" value="{{$account['address']}}">
                        <br>

                        <label for="DOB">Date of Birth:</label>
                        <input type="date" name="DOB" id="DOB" value="{{$account['DOB']}}">
                        <br>

                        <label for="pin">4-Digit Pin:</label>
                        <input type="number" maxlength="4" name="pin" id="pin" value="{{$account['pin']}}">
                        <br>
                </fieldset>
            </div>

            <div class = "acc-ownshp">
                <fieldset>
                    <legend><h2>Account Ownership</h2></legend>

                        <label for="account_owner">Account Owner:</label>
                        <input type="text" name="account_owner" id="account_owner" value="{{$account['account_owner']}}">
                        <br>

                        <label for="ownership">Ownership:</label>
                        <input type="text" name="ownership" id="ownership" value="{{$account['ownership']}}">
                        <br>

                        <label for="SIC_code">SIC Code:</label>
                        <input type="number" name="SIC_code" id="SIC_code" value="{{$account['SIC_code']}}">
                        <br>

                        <label for="account_type">Account Type:</label>
                        <input type="text" name="account_type" id="account_type" value="{{$account['account_type']}}">
                        <br>

                        <label for="rating">Rating:</label>
                        <input type="text" name="rating" id="rating" value="{{$account['rating']}}">
                        <br>
                </fieldset>
            </div>

            <div class = "Billing">
                <fieldset>
                    <legend><h2>Billing</h2></legend>
                        <label for="current_balance">Current Balance:</label>
                        <input type="number" name="current_balance" id="current_balance" step="any" value="{{$account['current_balance']}}">
                        <br>

                        <label for="due_date">Due Date:</label>
                        <input type="date" name="due_date" id="due_date" value="{{$account['due_date']}}">
                        <br>

                        <label for="amount_past_due">Amount Past Due:</label>
                        <input type="number" name="amount_past_due" id="amount_past_due" step="any" value="{{$account['amount_past_due']}}">
                        <br>

                        <label for="unbilled_charges">Unbilled Charges:</label>
                        <input type="number" name="unbilled_charges" id="unbilled_charges" step="any" value="{{$account['unbilled_charges']}}">
                        <br>

                        <label for="status">Status:</label>
                        <input type="text" name="status" id="status" value="{{$account['status']}}">
                        <br>
                        <div class="radio-button">
                            <label for="arrangements_pending" style="margin-right:30px">Arrangements Pending :</label>

                            <p>Yes</p>
                            <input type="radio" name="arrangements_pending" value="Yes" id=""checked>

                            <p>No</p>
                            <input type="radio" name="arrangements_pending" value="No" id="">

                            <br>
                        </div>
                </fieldset>
            </div>
                    <div class = "other">
                        <label for="modified_by">Modified By:</label>
                        <input type="text" name="modified_by" id="modified_by" value="{{old('modified_by')}}">
                        <br>
                        <input type="submit" value="Save"class="sub-btn">
                    </div>

                </form>
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach

        </div>
    </body>

@else


@endif


    @include("_partials.footer")
