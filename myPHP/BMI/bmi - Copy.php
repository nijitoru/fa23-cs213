// for back-up in case code does not work anymore

<body>
    <?php

        include "bmi-form.html";

        if(isset($_POST['submit'])){
            $unit = $_POST['unit'];
            $gender = $_POST['gender'];

            $height = $_POST['height'];
            $weight = $_POST['weight'];
            
            // if no input, keeps asking until input is inputted
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

                echo "<table class='center' border='1pt'>
                    <tr>
                        <td>Unit</td>
                        <td>Gender</td>
                        <td>BMI</td>
                        <td>Height</td>
                        <td>Weight</td>
                        <td>Classification</td>
                    </tr>
                    <tr>
                        <td>$unit</td>
                        <td>$gender</td>
                        <td>$bmi</td>
                        <td>$height</td>
                        <td>$weight</td>
                        <td>$bmiLabel</td>
                    </tr>
                </table>";
            }

            

            

            
        }
    ?>
</body>