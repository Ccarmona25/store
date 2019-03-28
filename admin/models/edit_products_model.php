<?php

session_start();

$mysqli = new mysqli('cis282store.c8kmq1t2lwua.us-east-1.rds.amazonaws.com', 'carmonastore', 'CcEW+1986', 'cis282store') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$pro_name = '';

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_products_success.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $pro_name = $row['product_name'];
        $description = $row['description'];
        $list_price = $row['list_price'];
        $discount_percent = $row['discount_percent'];
        $date_added = $row['date_added'];
        $product_code = $row['product_code'];
        $category_id = $row['category_id'];
        
    }
}

if (isset($_POST['update'])){
    $id = $_POST['product_id'];
    $pro_name = $_POST['product_name'];
    $description = $_POST['description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    $date_added = $_POST['date_added'];
    $product_code = $_POST['product_code'];
    $category_id = $_POST['category_id'];
    
    $mysqli->query("UPDATE cis282store.products SET product_name='$pro_name', description='$description', list_price='$list_price', discount_percent='$discount_percent', date_added='$date_added', product_code='$product_code', category_id='$category_id' WHERE product_id=$id") or
            die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_products_success.php");
}








// Close Connection
mysqli_close($conn); 

?>