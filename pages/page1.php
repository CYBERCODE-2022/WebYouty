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
            margin-top: 100px;
            text-decoration: none;
            color:#fff;
            background-color: #2ecc71;           
            font-size: 12px;
            padding: 8px;
            border-radius:5px;
            height: 12px;
            font-weight: bold;
        }
        .on:hover{
            cursor: pointer;
            background-color: #95a5a6;
        }
    </style>
</head>
<body dir="rtl" style="margin: 10px;">

    <?php
        $name=$_GET['name']??'';
        $age=$_GET['age']??'';
        $numphon=$_GET['phonnumber']??'';
        $NationalCode=$_GET['NationalCode']??'';
        $gender=$_GET['gender']??'';
        
        echo '<h2 class="th">ثبت نام شما با موفقیت انجام شد</h2>';
        echo "$name"."&nbsp;"."&nbsp;"."عزیز"; 
        echo "<h4>برای ورود به سایت کافیست رو دکمه زیر کلیک کنید.</h4>";
       
        
        
    ?>
    
     <a href="page2.php" class="on">ورود</a>
</body>
</html>