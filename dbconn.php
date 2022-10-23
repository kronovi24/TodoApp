<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todoApp";

$Title =  "";
$About = "";

if ($_GET["Action"] == "create") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    // insert data
    $Title = $_GET['Title'];
    $About = $_GET['About'];

    $sql = "INSERT INTO data (Title, About)
    VALUES ('$Title' , '$About')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


if ($_GET["Action"] == "get") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select * from data";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $array = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
    echo json_encode($array);
    $conn->close();
}

if ($_GET["Action"] == "delete") {
    // Create connection
    $ID = $_GET["ID"];
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM `data` WHERE ID=$ID ";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}