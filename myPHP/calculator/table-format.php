<?php
    const BR = "<br>";
    $apple = "Apple"; //Fruit Name
    $pricePerPound = 2.99; //Price Per Pound
    $quantity = 10; // Number of Pounds
    $totalCostBeforeTax = $quantity * $pricePerPound; //Total Cost Before Tax
    $taxRate = 0.04; // Tax Amount
    $taxAmount = $totalCostBeforeTax * $taxRate; //Tax Payed
    $totalCostAfterTax = $totalCostBeforeTax * (1+$taxRate); //Total Cost After Tax

    $formattedTaxAmount = number_format($taxRate * 100, 2);

    echo "<table>
    <tr></tr>
    <td colspan = '3'>Hello World</td>
    <tr>
        <th>Fruit Name</th>
        <th>Price Per Round</th>
        <th>Number of Pounds</th>
        <th>Total Cost Before Tax</th>
        <th>Tax Rate</th>
        <th>Tax Amount</th>
        <th>Total Cost After Tax</th>

    </tr>
    <tr>
        <td>$apple</td>
        <td>$pricePerPound</td>
        <td>$quantity</td>
        <td>$totalCostBeforeTax</td>
        <td>$formattedTaxAmount%</td>
        <td>$taxAmount</td>
        <td>$totalCostAfterTax</td>

    </tr>
    </table>";
    echo BR.BR. "Math functions<br>" . BR;

    $price = 1.999;

    echo "Ceil Function ". ceil($price). BR;
    echo "Floor Function ". floor($price). BR;
    echo "Round Function ". round($price). BR;
    var_dump($price);
    $isTrue = false;
    echo BR. $isTrue;

    var_dump($isTrue);
    echo BR;
    var_dump($apple);
