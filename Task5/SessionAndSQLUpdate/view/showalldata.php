<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchProduct=$connection->ShowAll($conobj,"product");

if ($SearchProduct->num_rows > 0) {

    // output data of each row
    while($row = $SearchProduct->fetch_assoc()) {

      echo "Product id : ".$row["P_id"]."<br>";
      echo "Product Name : ".$row["P_Name"]."<br>";
      echo "Product Description : ".$row["P_Desc"]."<br>";
      echo "Product Category : ".$row["P_Category"]."<br>";
      echo "Product price : ".$row["P_Price"]."<br>";
      echo "<img src='".$row['P_Picture']."'><br><br>";

    }
}

?>

<h3><a href="pageone.php">Back</a></h3>