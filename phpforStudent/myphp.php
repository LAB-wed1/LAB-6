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
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        img, h2 {
            display: inline;
        }

        .column {
            flex: 50%;
            padding-right: 20px;
            padding-top: 40px;
            text-align: right;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 80%;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body background="./.....png">
    <div class="row">
        <div class="column">
            <!-- ใส่ลิงก์ในหน้าเว็บที่นี่ -->
            <a href="home.php"><strong>HOME</strong></a><strong> |
            <a href="php1.php">PHP 1</a> |
            <a href="php2.php">PHP 2</a> |
            <a href="loop.php">LOOP</a> |
            <a href="array.php">ARRAY</a> 
            </strong>
        </div>
    </div>
    <hr />
    <br /><br /><br /><br /><br /><br /><br />

    <!-- ใส่ CODE PHP ที่นี่ -->
    <?php
    // กำหนดตัวแปร $fullname
    $fullname = "harry potter";

    // แยกชื่อและนามสกุล
    list($firstname, $lastname) = explode(" ", $fullname);

    // กำหนดชื่อเล่น
    $nickname = "HARRY";

    // คำนวณอายุ
    $birthdate = strtotime("2005-01-06"); // วันเกิดตัวอย่าง
    $currentDate = time();
    $age = date("Y", $currentDate) - date("Y", $birthdate);

    // วันที่บันทึกข้อมูล
    $update = date("Y-m-d");
    ?>

    <div>
        <table border="1">
            <tr>
                <td>Firstname</td>
                <td><?php echo $firstname; ?></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><?php echo $lastname; ?></td>
            </tr>
            <tr>
                <td>Nickname</td>
                <td><?php echo $nickname; ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>Update</td>
                <td><?php echo $update; ?></td>
            </tr>
        </table>
    </div>

</body>
</html>
