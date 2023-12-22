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
function countdown_birthday($month) {
    $days_in_month = 0;

    if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        $days_in_month = 30;
    } elseif ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
        $days_in_month = 31;
    } elseif ($month == 2) {
        $days_in_month = 29;  // Leap year (you may modify this based on the actual year)
    } else {
        $days_in_month = 28;
    }

    echo "My Birthday is August\n\n <br>";

    if ($days_in_month == 30) {
        for ($i = 31; $i >= 1; $i -= 5) {
            echo "Countdown: $i\n<br>";
        }
        echo "\nHappy Birthday to You !!!\nMay all your dreams come true!";
    } elseif ($days_in_month == 31) {
        for ($i = 31; $i >= 1; $i -= 5) {
            echo "Countdown: $i\n <br>";
        }
        echo "\nHappy Birthday to You !!!\nMay all your dreams come true!";
    } elseif ($days_in_month == 28 || $days_in_month == 29) {
        echo "Countdown: 1\n <br>";
        echo "\nHappy Birthday to You !!!\nMay your life be colorful!";
    } else {
        echo "Invalid!";
    }
}

// Call the function with the specified month (August is represented by 8)
countdown_birthday(8);
?>

</body>
</html>