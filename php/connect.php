<?php
$con = mysqli_connect("localhost","trinhtu","trinhtu15","db_quanlydiem");
// Check connection
if(!$con){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
    {
        echo "ok";
    }
 
// Perform queries 
mysqli_query($con,"SELECT * FROM sinhvien");

mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age) VALUES ('Glenn','Quagmire',33)");
 
mysqli_close($con);
?>