<!-- Name: Income Expenses Project
Purpose: Show income spent or earned
Programmer: Judy Marie Delos Reyes on September 29, 2023 -->

<!DOCTYPE html>
<html>
    <body>
        <?php

            // user variables
        $hoursWorked = $_POST['hoursWorked']; // hours worked monthly
        $hourlyRate = $_POST['hourlyRate'];
        $taxRate = $_POST['taxRate'];
        $food = $_POST['food'];
        $gas = $_POST['gas'];
        $other = $_POST['other'];

            // functions into variables
        $grossIncome = incomeBeforeTax($hoursWorked, $hourlyRate);
        $taxAmt = getTaxAmt($grossIncome, $taxRate);
        $taxIncome = incomeAfterTax($grossIncome, $taxAmt);
        $spending = totalExpenses($food, $gas, $other);
        $savings = $taxIncome - $spending;

            // how much earned w/out tax
        function incomeBeforeTax($hoursWorked, $hourlyRate){
            return $hoursWorked * $hourlyRate;
        }
            // takes tax rate and income
        function getTaxAmt($grossIncome, $taxRate){
            return $grossIncome * $taxRate;
        }
            // tax takes away income :(
        function incomeAfterTax($grossIncome, $taxAmt){
            return $grossIncome - $taxAmt;
        }
            // where one's money disappears
        function totalExpenses($food, $gas, $other){
            return $food + $gas + $other;
        }

            // show end results and one's poor spending habits
        if(isset($_POST['submit'])){
            echo "<table border='2px>
            
            <tr colspan='6'>
                <th colspan='6' style='color:blue'>Income</th>
            </tr>
            <tr>
                <th>Hours Worked Monthly</th>
                <th>Hourly Rate</th>
                <th>Tax Rate</th>
                <th>Income before Tax</th>
                <th>Tax Amount</th>
                <th>Income after Tax</th>
            </tr>
            <tr>
                <td>$hoursWorked</td>
                <td>$hourlyRate</td>
                <td>$taxRate%</td>
                <td>$grossIncome</td>
                <td>$taxAmt</td>
                <td>$taxIncome</td>
            </tr>
            <tr>
                <th colspan='6' style='color:orange'>Expenses</th>
            </tr>
            <tr>
                <th>Food</th>
                <th>Gas</th>
                <th>Other</th>
                <th colspan='3'>Total Expense</th>
            </tr>
            <tr>
                <td>$food</td>
                <td>$gas</td>
                <td>$other</td>
                <td colspan='3'>$$spending</td>
            </tr>";

            if($spending < 0){
                echo "<td colspan='6'>You're in debt. :(</td>";
                echo "<tr><td style='color:red' colspan='6'>$$savings</td></tr>";
            }
            elseif($spending == 0){
                echo "<td colspan='6'>You got nothing saved up. :(</td>";
                echo "<tr><td colspan='6'>$$savings</td></tr>";
            }
            else{
                echo "<td colspan='6'>You have this much left. Congrats. :)</td>";
                echo "<tr><td style='color:green' colspan='6'>$$savings</td></tr>";
            }
            echo "</table>"; 
        }
        ?>
    </body>
</html>