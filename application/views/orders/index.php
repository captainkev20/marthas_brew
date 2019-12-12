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
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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
                    <a class="nav-link active" id="hot-tab" data-toggle="tab" href="#hot" role="tab" aria-controls="hot" aria-selected="true">Hot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cold-tab" data-toggle="tab" href="#cold" role="tab" aria-controls="Cold" aria-selected="false">Cold</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                    <div class="row">
                        <?php foreach($hot_items as $item):?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top"
                                         src="/marthas_brew/assets/images/items/<?php echo $item['picture']; ?>"
                                         class="img-responsive">
                                    <div class="card-header">
                                        <h3 class="card-title"><?php echo $item['name']; ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-price">$<?php echo $item['cost']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-customization-text">Order customizations: </p>
                                        <textarea name="Text1" maxlength="50"></textarea>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="<?php echo $item['id']; ?>" name="items[]"> Add to cart
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="tab-pane fade" id="cold" role="tabpanel" aria-labelledby="cold-tab">
                    <div class="row">
                        <?php foreach($cold_items as $item):?>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top"
                                         src="/marthas_brew/assets/images/items/<?php echo $item['picture']; ?>"
                                         class="img-responsive">
                                    <div class="card-header">
                                        <h3 class="card-title"><?php echo $item['name']; ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-price">$<?php echo $item['cost']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-customization-text">Order customizations: </p>
                                        <textarea name="Text1" maxlength="50"></textarea>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="<?php echo $item['id']; ?>" name="items[]"> Add to cart
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
                    <div class="card card-primary mt-4">
                        <div class="card-header">Customer Details</div>
                        <div class="card-body">
                            <div class="row">
                                <div class='col-md-4'>
                                    <div class="form-group">
                                        <label class="control-label" for="pickup_time">Pickup Time</label>
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
                                        <label class="control-label" for="customer_name">Customer Name</label><br/>
                                        <input id="customer_name" class="form-control" name="customer_name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="phone_number">Phone Number</label><br/>
                                        <input id="phone_number" class="form-control" name="phone_number" type="tel" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label>
                            <input type="checkbox" value="Pay with cash" name="pay_with_cash[]"> Pay with Cash
                        </label>

                        <label>
                            <input type="checkbox" value="Pay with card" name="pay_with_card[]"> Pay with Card
                        </label>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit Order">
                        </div>
                    </div>
        </div>
    </form>
    </body>

</html>