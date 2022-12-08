<?php
include 'pdo_connecting.php';
switch($_GET["action"]){
    case "delete":
        $name=$_GET["name"];
        echo "<script>
            if(confirm('您確定要刪除「".$name."」嗎？')){
                location.href='action.php?action=delete&name=".$name."'
            }            
            else{
                location.href='table.php';
            }
            </script>"; 
        break;
    case "update":
        $query="select * from test";//需要執行的sql語句
        $res=$db->prepare($query);//準備查詢語句
        $res->execute();
        while($result=$res->fetch(PDO::FETCH_ASSOC)){
            if($result['name']==$_GET["name"]){
                $name = $result['name'] ;
                $email = $result['email'] ;
                $phone = $result['phone'] ;
                $line = $result['line'] ;
            }
        }
        echo "<script>
            if(confirm('您確定要修改「".$name."」嗎？')){
                location.href='table_update.php?name=".$name."&email=".$email."&phone=".$phone."&line=".$line."'
            }            
            else{
                location.href='table.php';
            }
            </script>"; 
        break;
}
?>