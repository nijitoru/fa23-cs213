<!-- Name: Denomination Project
Purpose: Convert change into dollars, quarters, dimes, nickles and pennies
Programmer: Judy Marie Delos Reyes on October 03, 2023 -->

<!DOCTYPE html>
<html>
    <body>
        
        <?php
            include "denomination-form.html";
            echo "<br>";

            $amtOwedJMDR = $_POST['amtOwed'];
            $amtPaidJMDR = $_POST['amtPaid'];
            $changeJMDR = $amtPaidJMDR - $amtOwedJMDR;

            $totalPennyJMDR = $changeJMDR * 100;

            $dollarJMDR = $changeJMDR % 100;
            
            $quarterJMDR = $dollarJMDR % 25;
            $dimeJMDR = $quarterJMDR % 10;
            $nickleJMDR = $dimeJMDR % 5;
            $pennyJMDR = $nickleJMDR / 1;
            
            
            if(isset($_POST['submit'])){
                if($amtOwedJMDR == '' || $amtPaidJMDR ==''){
                    echo "Enter an amount.";
                }
                
                echo "
                Amount owed: $$amtOwedJMDR<br>
                Amount paid: $$amtPaidJMDR<br>
                Change: $$changeJMDR<br>
                $$changeJMDR equals $totalPennyJMDR pennies<br><br>
                $dollarJMDR dollar(s)<br>
                $quarterJMDR quarter(s)<br>
                $dimeJMDR dime(s)<br>
                $nickleJMDR nickel(s)<br>
                $pennyJMDR pennies<br>
                Thank you for your order.
                ";
            }
        ?>
    </body>
</html>