<?php  
    include('header.php');
    include('database.php');

    ?>
<h4>我要張貼新聞</h4>
<hr>
<form action="savepost.php" method="POST">
	<table class="table table-striped">
		<tr>
			<td>標題：</td>
			<td><input type=text name=title size=80></td>
		</tr>
		<tr>
			<td>內容：</td>
			<td><textarea name=content rows=10 cols=80></textarea></td>
		</tr>
		<tr>
			<td colspan=2>
				<input type=submit value="新增">
				<input type=reset value="清除重來">
			</td>
		</tr>
	</table>
</form>
<?php  
    include('footer.php');
?>
