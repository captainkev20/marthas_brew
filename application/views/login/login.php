<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <div class="container">
        <form method="post" action="/marthas_brew/login/loginUser">
            <div class="card card-primary mt-4">
                <div class="card-header">Enter credentials below </div>
                <div class="card-body">
                    <div class="row">
                        <div class='col-md-4'>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input id="username" name="username" type='text' class="form-control" />
                                    <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label><br/>
                                <input id="password" class="form-control" name="password" type="text" required>
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