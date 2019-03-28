<?php
require('includes/config.php');

$productId = $_GET["product"];





//Get all Products

$strSQL =
"SELECT *

FROM
cis282store.categories c

ORDER BY
c.category_id

";

// GET RESULTS
$result = mysqli_query($conn,$strSQL);

//Fetch Data
$categoryList = mysqli_fetch_all($result, MYSQLI_ASSOC);

























//FREE RESULT
mysqli_free_result($result);

//CLOSE CONNECTION
mysqli_close($conn);
?>