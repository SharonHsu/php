<?php  
   
    include('database.php');
$title = $_POST["title"];
$content = $_POST["content"];

//測試資料是否正常運作
//echo $title . "<br>"; 
//echo $content;

$sql = "INSERT INTO news (title, content)VALUES ('$title', '$content')";

//if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->query($sql);
$conn->close();
header("Location: http://localhost/mysite");

?>