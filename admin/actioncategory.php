<?php 
$name = $_POST['name'];
$priority = $_POST['priority'];
echo $priority;
echo $name;
//create connection 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'smc_bca3rd2024';

$conn = new mysqli($server, $username, $password, $database);
//setup query 
$qry = "INSERT INTO categories (name, priority) VALUES ('$name', $priority)";

//run query 
$result = $conn->query($qry);
if($result)
    {
        echo "Category added successfully";
    }
    else{
        echo "Error: " . $conn->error;
    }
    //close connection
    $conn->close();
?>