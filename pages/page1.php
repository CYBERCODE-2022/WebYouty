<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .th{
            color:#2ecc71;
        }
        .on{
            text-decoration: none;
            color:#fff;
            background-color: #2ecc71;           
            font-size: 12px;
            padding: 10px;
            border-radius:5px;
            height: 15px;
            font-weight: bold;
        }
        .on:hover{
            cursor: pointer;
            background-color: #95a5a6;
        }

        .error{
            text-align: center;
            color: red;
            font-size: 20px;
            background-color: black;
            padding: 8px;
        }
    </style>
</head>
<body dir="rtl" style="margin: 10px;">

    <?php
        $name=$_POST['name']??'';
        $age=$_POST['age']??'';
        $phonenum=$_POST['phonnumber']??'';
        $NationalCode=$_POST['NationalCode']??'';
        $gender=$_POST['gender']??'';
        
        if($phonenum || $gender || $age || $name || $NationalCode==null){
            echo '<h2 class="error">'.'لطفا'."&nbsp".'همه'."&nbsp;".'اطلاعات'."&nbsp".'خود'."&nbsp".'را'."&nbsp".'به'."&nbsp".'درستی'."&nbsp".'کنید.'.'<h2/>';
            echo "<br/>".'<a class="on" href="../index.html">'.'باشه'.'</a>';
        }else{
            echo '<h2 class="th">ثبت نام شما با موفقیت انجام شد</h2>';
            echo "$name"."&nbsp;"."&nbsp;"."عزیز"; 
            echo "<h4>برای ورود به سایت کافیست رو دکمه زیر کلیک کنید.</h4>";
            echo '<a href="page2.php" class="on">ورود</a>';
        }

    ?>    
        
    
    
     
</body>
</html>