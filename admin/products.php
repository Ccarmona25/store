<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">

    <?php
	require('includes/config.php');
    require('models/products_model.php');
    ?>

    <title>CIS 282 | GUITAR WORLD</title>
</head>
<body>
<h1>While my Guitar Gently Weeps</h1>
<div class="div container-fluid main-title">
    <div class="row">
        <div class="col">
            <h2>Product Line</h2>
            <a href="add_products.php" class="btn btn-primary">Add Product</a>

            </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row text-center">
        <div class="col-1"></div>
        <div class="col-1">Category</div>
        <div class="col-1">Product Code</div>
        <div class="col-2">Product Name</div>
        <div class="col-3">Description</div>
        <div class="col-1">List Price</div>
        <div class="col-2">discount Percent</div>
        <div class="col-1">Date Added</div>
        
    </div>
</div>






<div class="container-fluid">
    <div class="row text-center">
<?php foreach($productList as $row){ ?>

            <div class="col-1"><?php echo $row['product_id']; ?></div>
            <div class="col-1"><?php echo $row['category_id']; ?></div>
            <div class="col-1"><?php echo $row['product_code']; ?></div>
            <div class="col-2"><?php echo $row['product_name']; ?></div>
            <div class="col-3 text-left"><?php echo $row['description']; ?></div>
            <div class="col-1"> <?php echo $row['list_price']; ?></div>
            <div class="col-2"><?php echo $row['discount_percent']; ?></div>
            <div class="col-1"><?php echo $row['date_added']; ?></div>
            <div class="col-12">
            <a href="edit_products.php?edit=<?php echo $row['product_id']; ?>" class="btn btn-info">Edit</a>
            <a href="models/edit_products_model.php?delete=<?php echo $row['product_id']; ?>" class="btn btn-danger">Delete</a>
            

            </div>
<?php
}
?>

    </div>
</div>








    






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>