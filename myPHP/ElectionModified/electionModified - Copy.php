<!-- Name: Denomination Project
Purpose: Convert change into dollars, quarters, dimes, nickles and pennies
Programmer: Judy Marie Delos Reyes on October 03, 2023 -->

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>Election Result</h1>

    <?php
        if(isset($_POST['submit'])){

            $candidates = $_POST['candidates'];
            $votes = $_POST['votes'];

            $max = max($votes);
            $winnerIndex = array_search($max, $votes);

            for($i = 0; $i < $votes[$i]; $i++){
                $totalVote = 0;
                $totalVote += $votes[$i];
                echo $totalVote;
            }

            echo "
            <table border='1'>
                <tr>
                    <th>Candidate Name</th>
                    <th>Votes</th>
                    <th>Percentage of Total Votes</th>
                    
                </tr>";
                foreach(array_combine($candidates, $votes) as $can => $vot){
                    echo "
                    <tr>
                        <td>$can</td>
                        <td>$vot</td>";
                    for($i = 0; $i < $votes[$i]; $i++){
                        $percent = number_format(($votes[$i] / $totalVote) * 100, 2);
                        echo "<td>$percent%</td>
                        </tr>";
                    }
                }
                echo "
                <tr>
                    <th colspan='2'>Total Number of Votes</th>
                    <td colspan='2'>$totalVote</td>
                </tr>
                <tr>
                    <td colspan='4'>
                        WINNER: $candidates[$winnerIndex] :D 
                    </td>
                </tr>
            </table>";
        }
    ?>
</body>
