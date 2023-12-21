<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>My Home Page</title>
    <style>
        body, html {
            background-size: cover;
            font-family: 'Kanit', sans-serif;
        }
        a {
            text-decoration: none;
            color: black;
        }
        img, H2 {
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

<body background="./.....png">
    <div class="row">
        <?php include('home.php'); ?>
        <div class="column" align="right" style="padding-right: 20px;padding-top: 40px;">
            <a href="home.php"><strong>HOME</strong></a><strong> |
            <a href="php1.php">PHP 1</a> |
            <a href="php2.php">PHP 2</a> |
            <a href="loop.php">LOOP</a> |
            <a href="array.php">ARRAY</a>
            </strong>
        </div>
    </div>
    <hr/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <table border="1">
        <tr>
            <th>Firstname</th>
            <td>HARRY</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>POTTER</td>
        </tr>
        <tr>
            <th>Nickname</th>
            <td>HARRY</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>18</td>
        </tr>
        <tr>
            <th>Update</th>
            <td>2023-01-06</td>
        </tr>
    </table>

    <?php
    if (!function_exists('calculateAge')) {
        function calculateAge($birthdate) {
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthdate), date_create($today));
            return $diff->format('%y');
        }
    }

    $fullname = "harry potter";
    $firstname = "HARRY";
    $lastname = "POTTER";
    $nickname = "HARRY";
    $age = calculateAge("2005-07-31"); // เปลี่ยนวันที่เกิดตามความเหมาะสม
    $update = date("Y-m-d");
    ?>

    <div class="container">
        <h1>MyPHP</h1>
        <table border="1">
            <tr>
                <th>Firstname</th>
                <td><?= $firstname ?></td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td><?= $lastname ?></td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td><?= $nickname ?></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><?= $age ?></td>
            </tr>
            <tr>
                <th>Update</th>
                <td><?= $update ?></td>
            </tr>
        </table>
    </div>

</body>
</html>
