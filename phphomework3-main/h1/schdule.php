<html>
    <head>
    <title>墾丁三日遊</title>
    </head>

    <?php
    echo "<body bgcolor ='	#F5DEB3' background='/img/logo.bmp'>";
    ?>

    <center><h1>墾丁三日遊</h1></center>
    <h2>1.行程內容</h2>
   
    <b>&nbsp &nbsp&nbsp墾丁旅遊行程Day1</b>	
    <p> &nbsp&nbsp&nbsp&nbsp國立海洋生物博物館 → 鹿境梅花鹿生態園區</p>
    <b> &nbsp&nbsp&nbsp墾丁旅遊行程Day2</b>	
    <p>&nbsp &nbsp&nbsp&nbsp墾丁南灣水上活動、後壁湖潛水 → 關山日落步道 → 墾丁大街／恆春夜市</p>
    <b> &nbsp&nbsp&nbsp墾丁旅遊行程Day3</b>	
    <p> &nbsp&nbsp&nbsp&nbsp鵝鑾鼻燈塔 → 龍磐公園、水蛙窟大草原 → 風吹砂</p>
    

    <a href="https://www.facebook.com/hoteldedeer/"><img src="/img/DSC07147-1170x780.jpg" border="1" width="20%" height="30%"></a>
    
    <a href="https://www.nmmba.gov.tw/"><img src="/img/d3884170.jpg" border="1" width="20%" height="30%"></a>
    <div>
    </div>
    <h2>2.</h2>
    <form action="rinfo.php" method="post" style="eidth:80%;" enctype="multipart/form-data">

    &nbsp&nbsp&nbsp&nbspName:&nbsp<input type ="text" name="name" placeholder="name" require>
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspEmail:&nbsp<input type ="email" name="email" placeholder="email" require>
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspTelephone:&nbsp<input type ="tel" name="tel" placeholder="tel" require >
    <br> <!--數值型-->
    <br/>&nbsp&nbsp&nbsp&nbspGender:&nbsp<input type ="radio" name="Gender" value="1" >male<input type ="radio" name="Gender" value="2">female
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspFood preference:&nbsp<input type ="checkbox" name="food[]" value="vegetarian">vegetarian
                                                <input type ="checkbox" name="food[]" value="no beef" >no beef


    

    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspT-shirt size:&nbsp
    <select name="Tshirt" multiple >
        <option>XL</option>
        <option>L</option>
        <option>M</option>
        <option>S</option>
    </select>
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspT-shirtcolor:&nbsp<input type ="color" name="color" >
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspBirthday:&nbsp<input type ="date" name="Birthday" >
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbspTickets:&nbsp<input type ="number" name="Tickets" >
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbsp<input type="submit">

    </form><!--表單-->






    <br> 
    <br> 
    <br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspT-shirt size對照表
     
    <br/> <table border="1">
    <tr><th></th><th>S</th><th>M</th><th>L</th><th>XL</th></tr>
    <tr><td>&nbsp長&nbsp</td><td>&nbsp97&nbsp</td><td>&nbsp99&nbsp</td><td>&nbsp101&nbsp</td><td>&nbsp103&nbsp</td></tr>
    <tr><td>&nbsp寬&nbsp</td><td>&nbsp42&nbsp</td><td>&nbsp44&nbsp</td><td>&nbsp46&nbsp</td><td>&nbsp50&nbsp</td></tr>
    <tr><td>&nbsp高&nbsp</td><td>&nbsp56&nbsp</td><td>&nbsp58&nbsp</td><td>&nbsp60&nbsp</td><td>&nbsp62&nbsp</td></tr>
    </table>
    


    <br> 
    <br> 
</html>
    