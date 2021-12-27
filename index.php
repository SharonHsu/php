<?php  
    include('header.php');
    include('database.php');


$sql = "SELECT * FROM news order by id desc"; //編寫資料查詢指令(使用order by做id資料排序)
$result = $conn->query($sql); //到資料庫中執行$sql裡面的指令
echo '<a href="post.php" type="button" class="btn btn-outline-primary">張貼新聞</a>';
echo "<br><br>";
if ($result->num_rows > 0) {
  // output data of each row
  
  echo "<center><table class='table table-striped'>";
  echo "<tr><th>編號</th><th>新聞標題</th><th>張貼日期</th><th>管理</th></tr>";

  while($row = $result->fetch_assoc()) {  //fetch_assoc()將讀出的資料Key值設定為該欄位的欄位名稱
    echo "<tr>";
    
    echo "<td>" . $row["id"] .  "</td>";
    echo "<td><a href='showcontent.php?id=" . 
    $row["id"] . "'>" . $row["title"] .  "</a></td>";
    echo "<td>" . $row["ptime"] .  "</td>";
    echo "<td><a href='delete.php?id=" . $row["id"] . "'>刪除</a></td>";
    echo "</tr>" ;
  }
  echo "</table></center>";
} else {
  echo "0 results";
}
$conn->close();
?>

<?php  
    include('footer.php');
?>