<?php

//如果出現header already sent
//ob_start();

session_start();
    
?>
<?php
if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "歡迎".$cookieID."再度光臨";
}else{
    echo "恭喜您發現本網站";
}
?>

<html>
    <head>
    <title>登入</title>


    </head>
    <center><h1>登入</h1></center>
    <hr color ="black" width="80%">

<form action="login.php" method="post" syle="width:60%; margin:0px auto;">
    
    <br>
    <br/><center>&nbsp&nbsp&nbsp&nbsp帳號:&nbsp<input type ="text" name="id" placeholder="id" require></center>
    <br> 
    <br/> <center>&nbsp&nbsp&nbsp&nbsp密碼:&nbsp<input type ="password" name="password" placeholder="password" require></center>

    <br/> <center>&nbsp&nbsp&nbsp&nbsp<input type="submit"></center>



<?php

$aID="admin";
$aPWD="4859485";
//以後不要這樣寫，要直接連到DB

//header
//可以跳到另一個網頁或定期更新網頁

//echo time();//從?年到現在的秒數

//date_default_timezone_set('Asia/Taipei');
//echo date("m-d-y h:i:s",time());
//header("Refresh:1");//每秒更新一次

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

            setcookie("UID",$id,time()+17280);
            //cookie在幾秒後會刪除資料

            header('Location:schdule.php');
            //跳到報名頁面

        }else{
            echo"帳號密碼輸入錯誤";
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

</form>
</html>