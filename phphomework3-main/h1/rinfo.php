<?php
$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$Gender=$_POST["Gender"];
$food=$_POST["food"];
$foodsize=count($food);
$trip=$_POST["trip"];
$size=$_POST["size"];
$number=$_POST["number"];
$comment=$_POST["comment"];

$comment=strip_tags($comment);
$comment=nl2br($comment);

$file=$_FILES["uphoto"];

//$foods=implode(",",$food);


echo"<h1>墾丁三日遊報名資料</h1>";
echo"<b>你的姓名:</b>".$name."先生/小姐"."<br/>";
echo"<b>你的電話:</b>".$tel."<br/>";
echo"<b>你的email:</b>".$email."<br/>";
echo"<b>你的食物偏好:</b>".$foods."<br/>";



if($Gender=='1'){
    echo"<b>你的性別:</b>男<br/>";
}elseif($Gender=='2'){
    echo"<b>你的性別:</b>女<br/>";
}else{
    echo"<b>你的性別:</b>不明<br/>"; 
}

//echo"<b>你的飲食偏好:</b>".$food."<br/>";
for($i=0;$i<$foodsize;$i++){
    if($i==0){
        echo $food[$i];
    }else{
       echo",".$food[$i]; 
    }
    
}

echo"<br/>";

echo"<b>你的size:</b>".$Tshirt."<br/>";
echo"<b>你的color:</b>".$color."<br/>";
echo"<b>你的生日:</b>".$Birthday."<br/>";
echo"<b>你的票數:</b>".$Tickets."<br/>";
echo"<b>你的意見:</b>".$comment."<br/>";

echo $_FILES["uphoto"]["name"]."<br/>";
//name=檔案名稱
echo $_FILES["uphoto"]["tmp_name"]."<br/>";
//tmp_name=暫存的檔案名稱
echo $_FILES["uphoto"]["size"]."<br/>";
//size=檔案大小
echo $_FILES["uphoto"]["type"]."<br/>";
//type=檔案型態

copy($files["uphoto"]["tmp_name"],$_FILES["uphoto"]["name"]);
?>