<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
    <div class="container">
        <form method="post" action="/marthas_brew/orders/submit">
            <div class="card card-primary mt-4">
                <div class="card-header">Enter credentials below </div>
                <div class="card-body">
                    <div class="row">
                        <div class='col-md-4'>
                            <div class="form-group">
                                <label class="control-label" for="pickup_time">Username</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input id="pickup_time" name="pickup_time" type='text' class="form-control" />
                                    <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="customer_name">Password</label><br/>
                                <input id="customer_name" class="form-control" name="customer_name" type="text" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </div>
    </div>
    </body>
</html>