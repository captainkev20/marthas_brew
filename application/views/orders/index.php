<h2><?php echo $title; ?></h2>

<html>
    <head>
        <title>Order Food</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    </head>

    <body>
    <div class="row">
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
    </body>
</html>