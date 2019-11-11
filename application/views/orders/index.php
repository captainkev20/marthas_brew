<!DOCTYPE html>
<html>
    <head>
        <title>Our Gourmet Offerings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
        <style type="text/css">
            .container {
                margin-top: 40px;
            }
            .btn-primary {
                width: 100%;
            }
        </style>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

        <script type='text/javascript'>
            $( document ).ready(function() {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </head>



    <body>
    <div class="row">
        <div class="column">

            <div class="container" style="width:600px;">
                <?php foreach($orders as $order_item):?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="http://localhost:8888/marthas_brew/assets/images/items/<?php echo $order_item['picture']; ?>"
                                 height="180" width="90" class="img-responsive">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $order_item['name']; ?></h5>
                                <p class="card-price"><?php echo $order_item['cost']; ?></p>
                                <p style="text-align:center;color:#04B745;">
                                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php endforeach;?>
            </div>
        </div>


        <div class="col-md-3 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Pickup Time</div>
                <div class="panel-body">
                    <div class="row">
                        <div class='col-md-6'>
                            <div class="form-group">
                                <label class="control-label">Pickup Time</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Set Pickup Time">
                </div>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-3">
            <form>
                <h2>Phone Number</h2>
                <label for="tel_number">Pleas enter as: (xxx-xxx-xxxx):</label><br/>
                <input id="tel_number" type="tel" pattern=^\d{3}-\d{3}-\d{4}$" required >
                <br>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
        <!--Close row-->
    </div>

    </body>

</html>