<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
/*$data = "amitchauhan07@yahoo.in";
$data2 = $;*/
$query = "SELECT * FROM `credentials`;";
$result = $connection->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "Roll No: " .
                $row["Roll_No"]. " - Name: " .
                $row["Name"]. " | City: " . 
                $row["City"]. " | Age: " . 
                $row["Age"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
/*
if ($email == $data && $pass == "$data2") {
    header('location:loginsuccessfull.php');
}
else {
    echo "Error while logging In";
 
}

mysqli_query ($connection, $data, $data2);

*/
?>