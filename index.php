<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام در سایت وبیوتی</title>
    <link href="css/style.css" rel="stylesheet">
    <style>
        *{
            padding: 0px;
            margin: 0px;
            border: none;
        }

        .submit{
            background-color:#2ecc71;
            color:#fff;
            display: block;
            margin-top:20px;
            padding:8px;
            width:70px;
            border-radius: 5px;
            font-weight: bold;
        }
        .submit:hover{
            cursor: pointer;
            background-color: #95a5a6;
        }
    </style>
</head>
<body dir="rtl">
   <div class="title">
       <h1>وبیوتی</h1>
   </div>
   <div class="box">
     سلام به تمام همراهان گرامی. به سایت وبیوتی خوشامدید. در سایت وبیوتی می توانید فقط نام و نام خانوادگی یک فرد را وارد کرده وارد کرده و تمام اطلاعات آن فرد را ببیند. برای این کار باید فرم زیر را پر کنید و در سایت ما ثبت نام کنید.
   </div>
   <img style="margin: 0px;" src="img/logo.png">

   <div class="main">
      <div class="myform">
            <form method="get" action="pages/page1.">
                <label>نام و نام خانوادگی :</label>
                <input type="text" name="name" placeholder="نام و نام خانوادگی">

                <label>شماره تلفن :</label>
                <input type="text" name="phonnumber" placeholder="شماره تلفن">

                <label>کد ملی :</label>
                <input type="text" name="NationalCode" placeholder="کد ملی">

                <labe class="lable">سن :</labe>
                <input type="number" name="age" placeholder="سن">

                <label>جنسیت :</label>
                <input type="radio" name="gender" value="men" style="cursor: pointer;">اقا
                <input type="radio" name="gender" value="woman"  style="margin-right: 7px; cursor: pointer;">خانم
               
                <input class="submit" type="submit" value="ثبت نام">
            </form>
      </div>  
   </div>

</body>
</html>
