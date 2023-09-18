<link rel ="stylesheet" href="mycss.css">

<?php

//    $num1 = $_POST['num1'];
//    $num2 = $_POST['num2'];



//     $sum = $num1 + $num2;
//     $difference = $num1 - $num2;
//     $product = $num1 * $num2;
//     $quotient = number_format(($num1 / $num2), 2);
//     $remainder = $num1 % $num2;

//     echo "<br><br><p>Declare Two Variables that Stores Integers</p>";
//     echo "<p>Do Basic Arithmetic Operations: +, -, *, /, %</p>";

//     echo "Addition:     $num1 + $num2 = $sum<br>";
//     echo "Difference:     $num1 - $num2 = $difference<br>";
//     echo "Product:     $num1 * $num2 = $product<br>";
//     echo "Quotient:     $num1 / $num2 = $quotient<br>";
//     echo "Remainder:     $num1 % $num2 = $remainder<br>";

    // echo "<br><br>";
    // echo "<table>

    //     <tr>
    //         <th colspan = '5'>Simple Calculator</th>
    //     </tr>
        
    //     <tr>
    //     <th>Sum</th>
    //     <th>Difference</th>
    //     <th>Product</th>
    //     <th>Quotient</th>
    //     <th>Remainder</th>
    //     </tr>

    //     <tr>
    //         <td>$sum</td>
    //         <td>$difference</td>
    //         <td>$product</td>
    //         <td>$quotient</td>
    //         <td>$remainder</td>
    //     </tr>

    // </table>";

    $number = 19.999;
    var_dump($number);
    $numRound = round($number);
    $numCeil = ceil($number);
    $numFloor = floor($number);
    $numFormat = number_format($number, 2);
    var_dump($numFormat);

    echo "<table>
    <tr> <th colspan = '4'>$number</th> </tr>
    <tr> 
        <th>Round Function</th>
        <th>Ceil Function</th>
        <th>Floor Function</th>
        <th>Number Format Function</th>
    </tr>

    <tr>
        <td>$numRound</td>
        <td>$numCeil</td>
        <td>$numFloor</td>
        <td>$numFormat</td>
    </tr>
    
    </table>";
?>


