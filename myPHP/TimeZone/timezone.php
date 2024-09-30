<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="tmzn.css">
</head>
<body>
    <?php
    const BR = "<br>";

    

    if(isset($_POST['submit'])){
        date_default_timezone_set("Pacific/Fiji");
        
        $city = $_POST['city'];

        $errorSelect = "Invalid input. Please try again";
        
        if($city ==  "lisbon"){
            date_default_timezone_set("Europe/Lisbon");
        } elseif($city ==  "valletta"){
            date_default_timezone_set("Europe/Malta");
        } elseif($city ==  "dubai"){
            date_default_timezone_set("Asia/Dubai");
        } elseif($city ==  "toronto"){
            date_default_timezone_set("America/Toronto");
        } elseif($city ==  "jakarta"){
            date_default_timezone_set("Asia/Jakarta");
        } elseif($city ==  "tokyo"){
            date_default_timezone_set("Asia/Tokyo");
        } elseif($city ==  "guam"){
            date_default_timezone_set("Pacific/Guam");
        } else {
            echo"No city selected. Please select a city.";
        }

        $timezone = date_default_timezone_get();

        $time = date('Y/m/d H:i a');
        $day = date('l');
        $month = date('F Y');
        $daysInMonth = ('F');
        $daysUntilXmas = ceil((strtotime("December 25")-time()) / 60 / 60 / 24);

        echo "<table border='2px'>
            <tr>
                <td>Timezone</td>
                <td>Date and Time</td>
                <td>Day of the Week</td>
                <td>Month</td>
                <td>Days in the Month</td>
                <td>Days until Christmas</td>
            </tr>
            <tr>
                <td>$timezone</td>
                <td>$time</td>
                <td>$day</td>
                <td>$month</td>
                <td>$daysInMonth</td>
                <td>$daysUntilXmas</td>
            </tr>
        </table>";
    }

    include "timezone-form.html";
    ?>
</body>