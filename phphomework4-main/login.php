<?php

//如果出現header already sent
//ob_start();

session_start();
    
?>
<?php
if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "感謝".$cookieID."回到本系統";
}else{
    echo "歡迎初次來到本系統";
}
?>

<html>
    <head>
    <title>login</title>


    </head>
    <center><h1>login</h1></center>
    <hr color ="black" width="80%">

<form action="login.php" method="post" syle="width:60%; margin:0px auto;">
    
    <br>
    <br/><center>&nbsp&nbsp&nbsp&nbsp帳號:&nbsp<input type ="text" name="id" placeholder="id" require></center>
    <br> 
    <br/> <center>&nbsp&nbsp&nbsp&nbsp密碼:&nbsp<input type ="password" name="password" placeholder="password" require></center>

    <br/> <center>&nbsp&nbsp&nbsp&nbsp<input type="submit"></center>
</form>


<?php

$aID="admin";
$aPWD="123456";
$bID="user";
$bPWD="12345";


if (isset($_POST["id"])){
    if($_POST["id"]!=null){

        $id=$_POST["id"];
        $password=$_POST["password"];

        //echo $id."<br/>";
        //echo $password."<br/>";

        if($aID==$id && $aPWD==$password){
            //echo "登入成功";
            //以後不要這樣寫
            $_SESSION["login"]="Yes";
            //echo登入成功

            //setcookie("UID",$id,time()+17280);
            //cookie在幾秒後會刪除資料

            header('Location:check.php');
            //跳到報名頁面

        }
        
        elseif($bID==$id && $bPWD==$password){
            //echo "登入成功";
            //以後不要這樣寫
            $_SESSION["login"]="Yes";
            //echo登入成功
    
            //setcookie("UID",$id,time()+17280);
            //cookie在幾秒後會刪除資料
    
            header('Location:check.php');
            //跳到報名頁面
    
        }else{
            echo"帳號密碼錯誤，請重新輸入密碼";
           
        }

        

    }else{
    
        echo"您尚未輸入帳號密碼";


    }
    
}else{

    echo"歡迎登入請輸入帳號密碼";
}

    

//如果出現header already sent
//ob_flash
?>


</html>