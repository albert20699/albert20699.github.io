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
    <br><br><br><br>
    
	<!-- 主程式 -->
	<div class="container-xxl">
		<h1>增加個人資料﹕</h1>
		<form action="" method=get>
			<table>
				<tr><td>姓名</td><td><input type=text name=name></td></tr>
				<tr><td>E-Mail</td><td><input type=text name=email></td></tr>
				<tr><td>電話</td><td><input type=text name=phone></td></tr>
				<tr><td>LINE-ID</td><td><input type=text name=line></td></tr>
				<tr><td></td><td><input type=submit value=增加></td></tr>
			</table>
		</form>
	</div>
    <?php
    if(is_array($_GET) && count($_GET)>0){
        if(!empty($_GET["name"])&&!ctype_space($_GET["name"])){
            $name=preg_replace('/\s/', '', $_GET['name']);
            $email=$_GET['email'];
            $phone=$_GET['phone'];
            $line=$_GET['line'];
            $sql = "insert into test (name, email, phone, line) values (?, ?, ?, ?)";
            try
            {
                $addinfo = $db->prepare($sql);
                $addinfo->execute(array($name, $email, $phone, $line));
                echo "<script>alert('新增資料輸入完畢﹗﹗');</script>";
            } catch (PDOException $e) {
                // $error='上傳資料發生錯誤：'.$e->getMessage();
                $error="<script>alert('Error : Name already exists.');</script>";
                echo ($error);
            }
        }
        else{
            echo "<script>alert('Error : "+"'name'"+" is empty');</script>";
        }
    }
    ?>

    <!-- 結尾 -->
    <footer>
        <?php
			include 'footer.html';
		?>
    </footer>
</body>
</html>