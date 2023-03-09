<head>
@include('/_partials/header')
<title>Add Account</title>
</head>

<body>
    <div class="form-container">
        <h1>User Account Creating Form</h1>

        <form class="acc-form" action="{{ route('createAccount') }}" method="POST">
            @if(Session::get('Success'))
            <p style="background-color:lightgreen; padding:20px">{{Session::get('Success')}}</p>
            @endif

            @if(Session::get('fail'))
            <p style="background-color:red; padding:20px">{{Session::get('fail')}}</p>
            @endif

            @csrf

            <div class = "pi-section">

                <fieldset>
                    <legend><h2>Personal Information</h2></legend>

                    <label for="account_number">Account Number:</label>
                    <input type="number" name="account_number" id="account_number" value="{{old('account_number')}}">
                    <br>

                    <label for="account_name">Account Name:</label>
                    <input type="text" name="account_name" id="account_name" value="{{old('account_name')}}">
                    <br>

                    <label for="phone_number">Phone number:</label>
                    <input type="number" name="phone_number" id="phone_number" value="{{old('phone_number')}}">
                    <br>

                    <label for="address">Address:</label> <br>
                    <input style="width:100%;" rows="4" cols="50" type="text" name="address" id="address" value="{{old('address')}}">
                    <br>

                    <label for="DOB">Date of Birth:</label>
                    <input type="date" name="DOB" id="DOB" value="{{old('DOB')}}">
                    <br>

                    <label for="pin">4-Digit Pin:</label>
                    <input type="number" maxlength="6" minlength="4"  name="pin" id="pin" value="{{old('pin')}}">
                    <br>

            </fieldset>
        </div>

        <div class = "acc-ownshp">
            <fieldset>
                <legend><h2>Account Ownership</h2></legend>

                    <label for="account_owner">Account Owner:</label>
                    <input type="text" name="account_owner" id="account_owner" value="{{old('account_owner')}}">
                    <br>

                    <label for="ownership">Ownership:</label>
                    <input type="text" name="ownership" id="ownership" value="{{old('ownership')}}">
                    <br>

                    <label for="SIC_code">SIC Code:</label>
                    <input type="number" name="SIC_code" id="SIC_code" value="{{old('SIC_code')}}">
                    <br>

                    <label for="account_type">Account Type:</label>
                    <input type="text" name="account_type" id="account_type" value="{{old('account_type')}}">
                    <br>

                    <label for="rating">Rating:</label>
                    <input type="text" name="rating" id="rating" value="{{old('rating')}}">
                    <br>
            </fieldset>
        </div>


        <div class = "Billing">
            <fieldset>
                <legend><h2>Billing</h2></legend>
                    <label for="current_balance">Current Balance:</label>
                    <input type="number" name="current_balance" id="current_balance" step="any" value="{{old('current_balance')}}">
                    <br>

                    <label for="due_date">Due Date:</label>
                    <input type="date" name="due_date" id="due_date" value="{{old('due_date')}}">
                    <br>

                    <label for="amount_past_due">Past Due Amount:</label>
                    <input type="number" name="amount_past_due" id="amount_past_due" step="any" value="{{old('amount_past_due')}}">
                    <br>

                    <label for="unbilled_charges">Unbilled Charges:</label>
                    <input type="number" name="unbilled_charges" id="unbilled_charges" step="any" value="{{old('unbilled_charges')}}">
                    <br>

                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" value="{{old('status')}}">
                    <br>
                    <div class="radio-button">
                        <label for="arrangements_pending" style="margin-right:30px">Arrangements Pending :</label>

                        <p>Yes</p>
                        <input type="radio" name="arrangements_pending" value="Yes" id=""checked>

                        <p>No</p>
                        <input type="radio" name="arrangements_pending" value="No" id="">
                        <br>

                    </div>

                    <label for="arrangement_date"> Arrangement Date :</label>
                    <input type="date" name="arrangement_date" value="{{old('arrangement_date')}}">
                    <br>

                    <label for="arrangement_amount"> Arrangement Amount :</label>
                    <input type="number" name="arrangement_amount" step="any" value="{{old('arrangement_amount')}}">
                    <br>

            </fieldset>
        </div>


            <div class = "other">
                    <label for="modified_by">Created By:</label>
                    <input type="text" required name="modified_by" id="modified_by" value="{{old('modified_by')}}">
                    <br>
                    <input type="submit" value="Save"class="sub-btn">
                </div>
            </form>

            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach

    </div>
</body>

@include("_partials.footer")
