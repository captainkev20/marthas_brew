<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="container">
    <form method="post" action="/marthas_brew/payment/processPayment">
        <div class="card card-primary mt-4">
            <div class="card-header">
                Order Total: <?php echo $_SESSION['order_cost'];?>  <br>
                Order Number: <?php echo $_SESSION['order_id'];?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class='col-md-4'>
                        <div class="form-group">
                            <label class="control-label" for="enter_name">Enter Name</label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input id="username" name="username" type='text' class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="card_number">Card Number</label><br/>
                            <input id="card_num" class="form-control" placeholder="4242 4242 4242 4242"
                                   name="card_number" type="text" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="expiration_date">Expiration Date</label><br/>
                            <input id="expiry_date" class="form-control" placeholder="MM/YYYY"
                                   name="expiration_date" type="text" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="cvc_code">CVC Code</label><br/>
                            <input id="cvc_code" class="form-control" placeholder="CVC"
                                   name="expiration_date" type="text" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Submit Payment">
            </div>
        </div>
</div>
</body>
</html>