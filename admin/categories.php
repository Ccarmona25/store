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
    require('models/categories_model.php');
    ?>

    <title>CIS 282 | Category World </title>
</head>
<body>

<div class="div container-fluid main-title">
    <div class="row">
        <div class="col">
            <h1>Category List</h1>
            <a href="add_categories.php" class="btn btn-primary">Add Category</a>

            </div>
    </div>
</div>

<div class="container-fluid main-headers">
    <div class="row text-center">
    <div class="col-1"></div>
    <div class="col-5 text-left"><strong>Category</strong></div>
    
    </div>
</div>




<?php foreach($categoryList as $row){ ?>
<div class="container-fluid list">
    <div class="row text-center">
            <div class="col-1"><?php echo $row['category_id']; ?></div>
            <div class="col-5 text-left"><?php echo $row['category_name']; ?></div>
            <div class="col-6">
            <a href="edit_categories.php?edit=<?php echo $row['category_id']; ?>" class="btn btn-info">Edit</a>
            <a href="models/edit_categories_model.php?delete=<?php echo $row['category_id']; ?>" class="btn btn-danger">Delete</a>
            

            </div>
    </div>
</div>
<?php
}
?>










    






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>