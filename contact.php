<!DOCTYPE html>
<html>
<head>
    <style>
        html,body {margin: 0 auto; height: 100%; width:100%;}
        main{background:#E0E0E0; height:87%; width:100% ; }
        .contact{display:grid; grid-template-columns:10% 20% 20% 40% 10%; grid-template-rows: 40% 40% 20%; gap:10px; position: relative; top: 12rem;}
		.contact_box1{grid-column:2;grid-row:1;font-family: 'cwTeXKai',serif;}
        .contact_box2{grid-column:3;grid-row:1;font-family: 'cwTeXKai',serif;}
        .contact_box3{grid-column:2;grid-row:2;font-family: 'cwTeXKai',serif;}
        .contact_box4{grid-column:3;grid-row:2;font-family: 'cwTeXKai',serif;}
        .contact_box5{grid-column:2;grid-row:3;font-family: 'cwTeXKai',serif;}
    </style>
    <?php
		include 'style.php';
        include 'pdo_connecting.php';
        include 'header.html';
	?>
</head>
<body>
    <main>
        <div class="contact">
            <div class="contact_box1" >
                <form action="test2.php" target="file05" method="get">
                姓名*<br>
                <input type="text" name="name1" size="10">
            </div>
            <div class="contact_box2" >
                <form action="test2.php" target="file05" method="get">
                Mail*<br>
                <input type="text" name="name2" size="10">
            </div>
            <div class="contact_box3">
                <form action="test2.php" target="file05" method="get">
                電話<br>
                <input type="text" name="name3" size="10">
            </div>
            <div class="contact_box4" >
                <form action="test2.php" target="file05" method="get">
                LINE ID<br>
                <input type="text" name="name4" size="10">
            </div>
            <div class="contact_box5" >
                <input type="submit" value="找尋">
            </div>

        </div>
        
    </main>
    

    <!-- 結尾 -->
    <footer>
        <?php
			include 'footer.html';
		?>
    </footer>


</body>
</html>

