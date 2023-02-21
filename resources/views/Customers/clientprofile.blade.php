@include("./_partials/header")

<body>
    <h1 style="text-align:center; margin:50px">Welcome, {{$info[0]['name']}}!</h1>

    <p></p>
    <hr style="width:30%">

    <main class="client-profile-grid">
        <div>
            <section id="details-card">
                <h2>Your Details</h2>
                <div class="details-content">
                    <p><strong>Account no. :</strong> {{$info[0]['account_number']}}</p>
                    <p><strong>Account Name :</strong> {{$info[0]['account_name']}}</p>
                    <p><strong>Account Type :</strong> {{$info[0]['account_type']}}</p>
                    <p><strong>Current Balance :</strong> {{$info[0]['current_balance']}}</p>
                </div>
            </section>
        </div>

        <div>
            <section id="payment-card">
                <h2>Make Payments</h2>
                <div class="payment-content">
                    <h3>Click on the button below for payment options.</h3>
                    <form action="{{route('paymentsCard')}}">
                        <input style = "width:100px; background-color:rgb(54, 176, 35); color:white;" type="submit" value="Pay">
                    </form>
                </div>
            </section>
        </div>

            <section id="invoices-card" style="display:none;">
                <h2>Invoices</h2>
                <div class="invoices-content">
                    <ul>
                        <li>Invoice 1</li>
                        <li>Invoice 2</li>
                        <li>Invoice 3</li>
                        <li>Invoice 4</li>
                        <li>Invoice 5</li>
                        <li>Invoice 6</li>
                        <li>Invoice 7</li>
                        <li>Invoice 8</li>
                    </ul>
                </div>
            </section>


            <section id="statements-card" style="display:none;">
                <h2>Account Statments</h2>
                <div class="statements-content">
                    <ul>
                        <li>Statement 1</li>
                        <li>Statement 2</li>
                        <li>Statement 3</li>
                        <li>Statement 4</li>
                        <li>Statement 5</li>
                        <li>Statement 6</li>
                    </ul>
                </div>
            </section>

    </main>

    <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "8b1030b6d5d8527a986a559b652f67a936f59f5db1d6960fc95d5a5b35445cc44edb09d0b2ba707d8726cbafab649157", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

</body>

@include("_partials.footer")
