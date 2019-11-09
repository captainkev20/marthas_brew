<h2><?php echo $title; ?></h2>

<html>
    <head>
        <title>Order Food</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    </head>

    <body>
        <div class="container">
            <?php foreach ($orders as $order_item): ?>
                <div class="col-sm-4 col-md-3">
                    <div class="products">
                        <img src="http://localhost:8888/marthas_brew/assets/images/items/<?php echo $order_item['picture']; ?>"
                             height="90" width="90" class="img-responsive"/>
                        <h4 class="text-info"><?php echo $order_item['name']; ?></h4>
                        <h4 class="text-info"><?php echo $order_item['cost']; ?></h4>
                        <input type="submit" name="add_item" class="btn btn-info" value="Add Item"
                    </div>
                </div>
            <?php endforeach; ?>
    </body>
</html>
