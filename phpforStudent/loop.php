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
    </style> 

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->
<body background="./.....png">
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
	<br/><br/><br/><br/><br/><br/><br/>

<!-- ใส่ CODE PHP ที่นี่ -->	
<?php

function birthdayCountdown($month) {
    $daysInMonth = 0;

    switch ($month) {
        case "April":
        case "June":
        case "September":
        case "November":
            $daysInMonth = 30;
            $decrementValue = 10;
            $message = "Wish you all the happiness in the world!";
            break;

        case "January":
        case "March":
        case "May":
        case "July":
        case "August":
        case "October":
        case "December":
            $daysInMonth = 31;
            $decrementValue = 5;
            $message = "May all your dreams come true!";
            break;

        case "February":
            $daysInMonth = (int)readline("Enter the number of days in February (28 or 29): ");
            $decrementValue = 1;
            $message = "May your life be colorful!";
            break;

        default:
            echo "Invalid!";
            return;
    }

    // Countdown loop
    $daysLeft = $daysInMonth;
    while ($daysLeft > 0) {
        echo "Days left: $daysLeft\n";
        $daysLeft -= $decrementValue;
    }

    echo $message . "\n";
}

// ตัวอย่างการเรียกใช้งาน
$userMonth = readline("Enter your birth month: ");
birthdayCountdown($userMonth);

?>



</body>
</html>