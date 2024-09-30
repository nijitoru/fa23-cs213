<head>
    
</head>
<body>
    <?php

        $points = array(10, 150, 20, 45, 89);

        foreach($points as $point){
            echo "Points are " . $point . ".<br>";
        }

        $age = array ("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        echo "<br>";

        foreach($age as $nameKey => $ageValue){
            echo "$nameKey is $ageValue years old.<br>";
        }

        echo "<br>";
        foreach($age as $x => $x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

    ?>
</body>
