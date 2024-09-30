<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>
        Election Result
    </h1>


    <?php
        if(isset($_POST['submit'])){
            $candidate1 = $_POST['candidate1'];
            $vote1 = $_POST['vote1'];

            $candidate2 = $_POST['candidate2'];
            $vote2 = $_POST['vote2'];

            $candidate3 = $_POST['candidate3'];
            $vote3 = $_POST['vote3'];

            $total = $vote1 + $vote2 + $vote3;
            $max = max($vote1, $vote2, $vote3);
            $min = min($vote1, $vote2, $vote3);
            $winner = $candidate1;

            // shows winner
            if($max == $vote2){
                $winner = $candidate2;
            }
            else if($max == $vote3){
                $winner = $candidate3;
            }

            // shows loser
            if($min == $vote2){
                $loser = $candidate2;
            }
            else if($min == $vote3)
                $loser = $candidate3;

            $percent1 = number_format(($vote1 / $total) * 100, 2);
            $percent2 = number_format(($vote2 / $total) * 100, 2);
            $percent3 = number_format(($vote3 / $total) * 100, 2);

            $percent = $percent1 + $percent2 + $percent3;
            $rpercent = round($percent);
            
            $average = $total / 3;
            $raverage = round($average);

            echo " <table class='center'>
            <tr>
                <td class='td1'>Candidate Name</td>
                <td class='td1'>Votes</td>
                <td class='td1'>Total percentage of votes</td>
            </tr>

            <tr>
                <td class='td2'>$candidate1</td>
                <td class='td2'>$vote1</td>
                <td class='td2'>$percent1</td>
            </tr>

            <tr>
                <td class='td2'>$candidate2</td>
                <td class='td2'>$vote2</td>
                <td class='td2'>$percent2</td>
            </tr>

            <tr>
                <td class='td2'>$candidate3</td>
                <td class='td2'>$vote3</td>
                <td class='td2'>$percent3</td>
            </tr>

            <tr>
                <td class='td1'>Total votes</td>
                <td class='td1'>$total</td>
                <td class='td1'>$rpercent%</td>
            </tr>

            <tr>
                <td colspan='3' class='td2'>
                    WINNER: $winner :D
                </td>
            </tr>

            </table>";

            echo "<br><br><br>";

            echo " <table class='center'>
                <tr>
                    <td class='td1'>Total Number of Votes Casted</td>
                    <td class='td1'>Highest Number of Votes</td>
                    <td class='td1'>Lowest Number of Votes</td>
                    <td class='td1'>Average Number of votes</td>
                </tr>

                <tr>
                    <td class='td2'>$total</td>
                    <td class='td2'>$max</td>
                    <td class='td2'>$min</td>
                    <td class='td2'>$raverage</td>
                </tr>

                <tr>
                    <td colspan='4' class='td2'>
                        LOSER: $loser :(
                    </td>
                </tr>

            </table>";
            
        }

    ?>

</body>
