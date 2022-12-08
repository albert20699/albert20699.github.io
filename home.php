<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<?php
		include 'style.php';
		include 'pdo_connecting.php';
		include 'header.html';
	?>
</head>
<body>
	<!-- 主程式 -->
	<div class="container-md">
		<font color="blue" face="DFKai-sb" size="15">畫面二</font><br>
		<input onclick="location.href='table.php'" type="button" value="連結名稱">
        <input onclick="location.href='input.php'" type="button" value="連結名稱"> 樣式一
        <a  onclick="location.href='table.php'" type="button" >連結名稱</a>
        <a  onclick="location.href='input.php'" type="button" >連結名稱</a>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
	</div><br>
	<br>
	
	<div class="container-xxl">
		<div class="table-responsive-xxl">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">欄1</th>
						<th scope="col">欄2</th>
						<th scope="col">欄3</th>
						<th scope="col">欄4</th>
						<th scope="col">欄5</th>
						<th scope="col">欄6</th>
						<th scope="col">欄7</th>
						<th scope="col">欄8</th>
						<th scope="col">欄9</th>
						<th scope="col">欄10</th>
						<th scope="col">欄11</th>
						<th scope="col">欄12</th>
						<th scope="col">欄13</th>
						<th scope="col">欄14</th>
						<th scope="col">欄15</th>
						<th scope="col">欄16</th>
						<th scope="col">欄17</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>能源</td>
						<td>環保</td>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td>Otto</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>


	
	<!-- 標題 -->
	<div class="container-md">
        <h1>首頁</h1>
        <form action="/home.php" method="get">
            <label for="fname">First name:</label> <input id="fname" name="fname" type="text"><br>
            <br>
            <label for="lname">Last name:</label> <input id="lname" name="lname" type="text"><br>
            <br>
            <input type="submit" value="Submit">
        </form>
        <br>
    </div>



    <!-- 結尾 -->
    <footer>
		<?php
			include 'footer.html';
		?>
    </footer>
</body>
</html>