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
    <!-- CSS Styling -->
    <style>
        body, html {
            background-size: cover;
            font-family: 'Kanit', sans-serif;
            margin: 0; /* Remove default margin */
        }
        a {
            text-decoration: none;
            color: black;
        }
        img, h2 {
            display: inline;
        }
        .row {
            display: flex;
        }
        .column {
            flex: 50%;
            padding-right: 20px;
            padding-top: 40px;
            text-align: right;
        }
    </style>
</head>
<body style="background: url('./.....png')">
    <div class="row">
        <div class="column">
            <a href="home.php"><strong>HOME</strong></a><strong> |
            <a href="php1.php">PHP 1</a> |
            <a href="php2.php">PHP 2</a> |
            <a href="loop.php">LOOP</a> |
            <a href="array.php">ARRAY</a>
            </strong>
        </div>
    </div>
    <hr />
    <br/><br/><br/><br/><br/><br/><br/>

    <!-- PHP Code -->
    <?php
$name = array(
    array("James", "Eldest Child", 15),
    array("Albus", "Middle Child", 13),
    array("Lily", "Youngest Child", 11),
);

// Sorting function
function cmp($a, $b)
{
    return strcmp($a[0], $b[0]);
}

// Sorting the array by name
usort($name, "cmp");

// Displaying data with the desired format
foreach ($name as $person) {
    echo "Name: " . $person[0] . "<br>";
    echo "Status: " . $person[1] . "<br>";
    echo "Age: " . $person[2] . ".<br><br>";
}
?>

</body>
</html>
