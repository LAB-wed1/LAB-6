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
    td {
        border: 4px solid salmon;
        font-size: 26px;
        text-align: center;
        
    }
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
    table {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    </style> 
</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./11.png">
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
    <br/><br/><h1 style="color:salmon;text-align:center">Chakkarin Karanet WebSite PHP <br></h1><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<!-- ใส่ CODE PHP ที่นี่ strlen* -->			  
<?php
    $fullname = "chakkarin karanet";
    $nickname = "wave";
    $birthday = "06-06-2004";
    $today = date("Y-m-d");
    $diff = date_diff(date_create($birthday), date_create($today));
    list($firstname,$lastname) = explode(" ",$fullname);
?>

<table style width="30%">
    <tr>
        <td> First name  </td><td><?php echo $firstname ?></td>
    </tr>
    <tr>
        <td> Last name  </td><td><?php echo $lastname ?></td>
    </tr>
    <tr>
        <td> Nickname  </td><td><?php echo $nickname ?></td>
    </tr>
    <tr>
        <td> Age  </td><td style="color: red"><?php echo $diff->format('%y') ?></td>
    </tr>
    <tr>
        <td> Update  </td><td><?php echo $today ?></td>
    </tr>
</table>
</body>
</html>