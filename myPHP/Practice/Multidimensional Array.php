<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            $header = array("Car Name", "Price", "Sold", "Sales Amount");
            $carNames = array("Volvo", "BMW", "Saab", "Land Rover");
            $prices = array(50000, 65000, 78000, 90000);
            $quantity = array(4, 2, 3, 1);

            $subtVolvo = 0;
            $subtBMW = 0;
            $subtSaab = 0;
            $subtLandRover = 0;

            $subTotals = array($subtVolvo, $subtBMW, $subtSaab, $subtLandRover);
            $grandTotal = 0;

            for($i = 0; $i < count($subTotals); $i++){
                $subTotals[$i] = $prices[$i] * $quantity[$i];
                echo "Subtotal: $$subTotals[$i]<br>";
                
            }

            foreach($subTotals as $subTotal){
                $grandTotal += $subTotal;
            }

            echo "<br>$grandTotal";

            echo "<table><tr>"; 
                    foreach($header as $head){
                    echo "<th>$head</th>";
                    }
                echo "</tr><tr>";
                for($i = 0; $i < count($subTotals); $i++){
                    echo "<td>$carNames[$i]</td>
                    <td>$prices[$i]</td>
                    <td>$quantity[$i]</td>
                    <td>$subTotals[$i]</td></tr>";
                }
                echo "<tr></tr>";
                echo "<td colspan='3'>Grand Total: $</td><td>$grandTotal</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>