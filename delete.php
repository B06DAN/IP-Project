<?php
if (isset($_POST['dlteBtn'])) {
    $id = $_POST['itemid'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "europa";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM cereri WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>