<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<?php
		include 'style.php';
        include 'header.html';
		include 'pdo_connecting.php';
	?>
</head>
<body>
    <!-- 指引列(麵包屑) -->
    <header>
        <div id="top_background">
            <div id="menu"  style="top:20px">
                <a  onclick="location.href='welcome.php'" type="button" >Home</a>
                <span class="white-text" style="margin-right: 1em;"></span>
                <a  onclick="location.href='input.php'" type="button" >input</a>
                <span class="white-text" style="margin-right: 1em;"></span>
                <a  onclick="location.href='table.php'" type="button">table</a>
                <span class="white-text" style="margin-right: 1em;"></span>
                <a  onclick="location.href='contact.php'" type="button" >contact</a>
                <span class="white-text" style="margin-right: 1em;"></span>
                <a  onclick="location.href='about.php'" type="button" >about</a>
                <!-- <span class="white-text" style="margin-right: 1em;"></span>
                <a  onclick="location.href='logout.php'" type="button" >logout</a> -->
            </div>
        </div>
    </header>
    <br><br><br><br>

	<!-- 主程式 -->
    <?php
    if(is_array($_GET) && count($_GET)>0){
        if(!empty($_GET["name"])){
            $name=$_GET['name'];
            $email=$_GET['email'];
            $phone=$_GET['phone'];
            $line=$_GET['line'];
        }
    }
    ?>
	<div class="container-xxl">
		<h1>修改個人資料﹕</h1>
		<form action="action.php" method=get>
			<table>
				<tr><td>姓名</td><td><input type=text name=name_new value="<?php echo $name ?>"></td></tr>
				<tr><td>E-Mail</td><td><input type=text name=email value="<?php echo $email ?>"></td></tr>
				<tr><td>電話</td><td><input type=text name=phone value="<?php echo $phone ?>"></td></tr>
				<tr><td>LINE-ID</td><td><input type=text name=line value="<?php echo $line ?>"></td></tr>
				<input name="action" value="update" style = "display:none">
                <input name="name_old" value="<?php echo $name ?>" style = "display:none">
				<tr><td></td><td><input type=submit value=確認修改></td></tr>
			</table>
		</form>
	</div>

    <!-- 結尾 -->
    <footer>
        <?php
			include 'footer.html';
		?>
    </footer>
</body>
</html>