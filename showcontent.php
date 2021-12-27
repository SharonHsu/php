<?php  
    include('header.php');
    include('database.php');


    $id = $_GET["id"];

    $sql = "SELECT * FROM news WHERE id='$id'"; //id為資料庫中的主鍵
    $result = $conn->query($sql);

 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); //fetch_assoc()將讀出的資料Key值設定為該欄位的欄位名稱
?>
        <div class="card">
        <div class="card-header">
         新聞內容
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]; ?></h5>
          <p class="card-text"><?php echo nl2br($row["content"]); ?></p>
          <a href="index.php" class="btn btn-primary">回上頁</a>
        </div>
        <div class="card-footer text-muted">
        <?php echo $row["ptime"]; ?>
        </div>
      </div>

<?php  

    } else {
        echo "找不到你要的新聞!";
    }
    $conn->close();
?>

<?php  
    include('footer.php');
?>