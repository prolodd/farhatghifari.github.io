<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Calculator</title>
</head>
<body>
    <?php include "header.php";?>

    <h1> Circle Calculator </h1>

    <form action="circle.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form><br>
</body>
</html>
<?php
    if (isset($_POST["radius"])) {
        $radius = $_POST["radius"];
        $circumference = null;
        $area = null;

        $circumference = 2 * pi() *$radius;
        $circumference = round($circumference, 4);

        $area = pi() * pow($radius, 2);
        $area = round($area, 4);

        echo"Circumference = {$circumference}cm <br>";
        echo"Area= {$area} cm<sup>2</sup>.";
    } else {
        echo  '<span style="color:red;"> Enter radius value. </span>';
    }

?>