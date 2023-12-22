<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <title>My Home Page</title>
    <!-- #### ส่วนของ CSS ตกแต่งเว็บไซต์ ### -->
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <style>
    body, html {
    background-size: cover;
    font-family: 'Kanit', sans-serif;
    background-image: url(5.gif);
    }
    a{
        text-decoration: none;
        color: black;
    }
    img,H2{

        display: inline;
    }
    .row {
    display: flex;
    }

    .column {
    flex: 50%;
    }
    h1 {
        text-align: center;
        
    }
    p{
        margin-left: 36%;
        font-size: 24px;
    }
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./.png">
    <div class="row">
        
        <div class="column" align="right" style="padding-right: 20px;padding-top: 40px;">
            <!-- ใส่ลิงก์ในหน้าเว็บที่นี่ -->
            <a href="home.php"><strong>HOME</strong></a><strong> |
            <a href="php1.php">PHP 1</a> |
            <a href="php2.php">PHP 2</a> |
            <a href="loop.php">LOOP</a> |
			<a href="array.php">ARRAY</a> 
            </strong>
        </div>
		
    </div>
	<hr/>
	
<!-- ใส่ CODE PHP ที่นี่ -->	

<?php
    $topic1 = "ฟังก์ชันในการแปลงสตริง";
?>
<?php 
    $pr1 = "- ฟังก์ชันแปลงสตริงให้เป็นตัวพิมพ์ใหญ่ใช้ strtoupper";
    $pr2 = "- ฟังก์ชันแปลงสตริงให้เป็นตัวพิมพ์เล็กใช้ strtolower";
?>

<h1><?php echo $topic1 ?></h1>
<p><br><?php echo $pr1 ?><br>
<?php echo $pr2  ?><br>
< html ><br>
< body ><br>
< ?php <br>
echo strtoupper(''Hello WORLD'')<br>
echo strtolower(''Hello WORLD'')<br>
?> <br>
< /body > <br>
< /html ></p>

</body>
</html>