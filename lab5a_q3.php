<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

    <?php
        function calculateArea($width, $length){
            $area = $width * $length;
            return $area;
        }
        $width = 4;
        $length = 2;
        $result = calculateArea(4,2);
    ?>

        <?php 
        echo "<b>The area of a rectangle with a width of " . $width . " and " . $length . " is " . $result. "</b>"; 
        ?>
       
</body>
</html>
