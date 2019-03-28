<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
        $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $list_price = mysqli_real_escape_string($conn, $_POST['list_price']);
        $discount_percent = mysqli_real_escape_string($conn, $_POST['discount_percent']);
        $date_added = mysqli_real_escape_string($conn, $_POST['date_added']);
        $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
        

        $query = "INSERT INTO cis282store.products(
                product_name, description, list_price, discount_percent, date_added, product_code, category_id
                
                ) VALUES
                (
                '$product_name', '$description', '$list_price', '$discount_percent', '$date_added', '$product_code', $category_id
                )
        ";

         


        if (mysqli_query($conn, $query)) {
  
          $_SESSION['message'] = "Record has been saved!";
          $_SESSION['msg_type'] = "success";  
        }
        else {
          $_SESSION['message'] = "An Error occurred while Saving. " . mysqli_error($conn);
          $_SESSION['msg_type'] = "danger";
        }

    } 
    
    

















// Close Connection
mysqli_close($conn); 


?>





       

