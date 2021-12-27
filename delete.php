<?php  
    include('database.php');

    $id = $_GET["id"];
    $sql = "DELETE FROM news WHERE id='$id'";
    $result = $conn->query($sql);

    $conn->close();
    header("Location: http://localhost/mysite");

?>

