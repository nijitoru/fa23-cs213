<!DOCTYPE html>
<head>

</head>

<body>
    <?php
        define("KILOMETERS", 1.60934);
        define("KILOGRAMS", 0.45359);

        if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $miles = $_POST['miles'];
            $pounds = $_POST['pounds'];

            $kilometer = KILOMETERS * $miles;
            $kilogram = KILOGRAMS * $pounds;
            
            $km = number_format($kilometer, 2);
            $kg = number_format($kilogram, 2);

            echo "Hello $user<br>"; 
            echo "Here are the conversion results down below:<br>";
            echo "$miles(s) is equals to $km<br>";
            echo "$pounds(s) is equals to $kg<br>";
        }
    ?>
</body>

