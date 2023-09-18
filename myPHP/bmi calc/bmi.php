<head>
    <link rel="stylesheet" href="bmo.css">
</head>
<body>
    <?php

        include "bmi-form.html";

        if(isset($_POST['submit'])){
            $unit = $_POST['unit'];
            $gender = $_POST['gender'];

            $height = $_POST['height'];
            $weight = $_POST['weight'];
            
            // if empty, enter; if < 0, enter a positive int
            if($height == '' || $weight == ''){
                $errorMsg = "Please input the missing values.";
                echo "$errorMsg";
            } else if($height < 0 || $weight < 0){
                $errorMsg = "Height or weight has to be greater than 0.";
                echo "$errorMsg";
            } else {
                // radio button formula for imperial and metric
                if($unit == "imperial"){
                    $bmi = number_format($weight / pow($height, 2) * 703, 1);
                    $height = $height."in";
                    $weight = $weight."lbs";
                } else {
                    $bmi = number_format(($weight / $height / $height) * 10000, 1);
                    $height = $height."cm";
                    $weight = $weight."kg";
                }

                // labels for bmi
                if($bmi <= 18.5){
                    $bmiLabel = "Underweight";
                } else if($bmi <= 24.9){
                    $bmiLabel = "Normal";
                } else if($bmi <= 29.9){
                    $bmiLabel = "Overweight";
                } else {
                    $bmiLabel = "Obese";
                }

                // display results
                echo "<table>
                    <tr>
                        <td class='td1'>Unit</td>
                        <td class='td1'>Gender</td>
                        <td class='td1'>BMI</td>
                        <td class='td1'>Height</td>
                        <td class='td1'>Weight</td>
                        <td class='td1'>Classification</td>
                    </tr>
                    <tr>
                        <td class='td2'>$unit</td>
                        <td class='td2'>$gender</td>
                        <td class='td2'>$bmi</td>
                        <td class='td2'>$height</td>
                        <td class='td2'>$weight</td>
                        <td class='td2'>$bmiLabel</td>
                    </tr>
                </table>";
            }
        }
    ?>
</body>