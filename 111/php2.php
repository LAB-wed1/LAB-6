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
        margin-left: 15%;
        font-size: 24px;
    }
    </style> 
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./32.png">
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
    $topic1 = "คำสั่งตรวจสอบเงื่อนไข IF-ELSE";
?>
<?php
    $pr1 = '- คำสั่ง if ใช้สำหรับกำหนดเพื่อให้โปรแกรมทำงานเมื่อเงื่อนไขเป็นจริง (True) ส่วนคำสั่ง else ใช้เพื่อกำหนดให้ไปรแกรมทำงานเมื่อเงื่อนไขเป็นเท็จ (False)';
    $pr2 = '- ฟังก์ชันแปลงสตริงให้เป็นตัวพิมพ์เล็กใช้ strtolower';
    $argc3= '<html>';
    $argc4='< body >';
    $argc5=  '< ?php ';
    $argc6='$d = data("D")';
    $argc7='if($d == "Fri"){';
    $argc8= 'echo "Heve a nice weekend"';
    $argc9= '}';
    $argc10=  '</html>';
    $argc11=  '</body>';
?>

<h1><?php echo $topic1 ?></h1>
<?php echo htmlentities ("$pr1") ?> <br>
<?php echo htmlentities ("$pr2") ?> <br>
<?php echo htmlentities ("$argc3") ?> <br>
<?php echo htmlentities ("$argc4") ?> <br>
<?php echo htmlentities ("$argc5") ?> <br>
<?php echo htmlentities ("$argc6") ?> <br>
<?php echo htmlentities ("$argc7") ?> <br>
<?php echo htmlentities ("$argc8") ?> <br>
<?php echo htmlentities ("$argc9") ?> <br>
<?php echo htmlentities ("$argc10") ?> <br>
<?php echo htmlentities ("$argc11") ?> <br>

</body>
</html>