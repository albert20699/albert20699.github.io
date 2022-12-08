<?php
include 'pdo_connecting.php';
switch($_GET["action"]){
    case "delete":
        $name=$_GET["name"];
        $str="DELETE FROM `test` WHERE `name` = '$name'";
        $db->exec($str);
        header("Location:table.php");
        break;
    case "update":
        $name_old = preg_replace('/\s/', '', $_GET['name_old']);
        $name_new = preg_replace('/\s/', '', $_GET['name_new']);
        $email = $_GET['email'] ;
        $phone = $_GET['phone'] ;
        $line = $_GET['line'] ;
        if(!empty($name_new)&&!ctype_space($name_new)){
            if($name_old==$name_new){
                $str = "UPDATE `test` SET `name` = '$name_new', `email` = '$email', `phone` = '$phone', `line` = '$line' WHERE `test`.`name` = '$name_old'";
                $db->exec($str);
                echo "<script>alert('修改資料輸入完畢﹗﹗');window.location.href='table.php';</script>";
                break;
            }
            else{
                $query="select * from test";//需要執行的sql語句
                $res=$db->prepare($query);//準備查詢語句
                $res->execute();
                while($result=$res->fetch(PDO::FETCH_ASSOC)){
                    if($name_new == $result['name']){
                        echo "<script>alert('修改資料發生錯誤：「姓名」資料已存在');window.location.href='table.php';</script>";
                        break;
                    } 
                }
                $str = "UPDATE `test` SET `name` = '$name_new', `email` = '$email', `phone` = '$phone', `line` = '$line' WHERE `test`.`name` = '$name_old'";
                $db->exec($str);
                echo "<script>alert('修改資料輸入完畢﹗﹗');window.location.href='table.php';</script>";
                break;
            }
        }
        else{
            echo "<script>alert('修改資料發生錯誤：未輸入「姓名」資料');window.location.href='table.php';</script>";
            break;
        }

}
?>