<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPHP</title>
</head>
<body>

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

</body>
</html>
