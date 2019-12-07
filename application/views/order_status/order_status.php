<!DOCTYPE html>
<html>
<head>
    <title>Pending Orders</title>
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
<div class="container">
    <form method="post" action="/marthas_brew/orders/submit">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pending-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="hot" aria-selected="true">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="completed-tab" data-toggle="tab" href="#completed" role="tab" aria-controls="Cold" aria-selected="false">Completed</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                <div class="row">
                    <?php foreach($pending_orders as $pending_order):?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $pending_order['customer_name']; ?></h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-price"><?php echo $pending_order['phone_number']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="<?php echo $pending_order['id']; ?>" name="items[]"> Started
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="paid-tab">
                <div class="row">
                    <?php foreach($completed_orders as $completed_order):?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo $completed_order['customer_name']; ?></h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-price"><?php echo $completed_order['phone_number']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="<?php echo $completed_order['id']; ?>" name="items[]"> Add to cart
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>

        <br>

        <div class="btn-primary">
            <input type="submit_changes" class="btn btn-primary" value="Submit Changes">

        </div>

</div>
</form>
</body>

</html>