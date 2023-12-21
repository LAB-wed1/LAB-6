<html>
<body>

<?php

$dayColors = [
    "sunday" => "red",
    "monday" => "yellow",
    "tuesday" => "pink",
    "wednesday" => "green",
    "thursday" => "orange",
    "friday" => "blue",
    "saturday" => "purple",
];

$today = strtolower(date("l")); // Convert the day to lowercase

echo "<span style=\"color: {$dayColors[$today]}\">Happy {$today}!!</span>";

?>
</body>
</html>
