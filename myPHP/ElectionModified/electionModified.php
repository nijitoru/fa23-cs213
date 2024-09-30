<!-- Name: ElectionMod Project
Purpose: Use arrays for candidates and votes; isset() max() number_format()
Programmer: Judy Marie Delos Reyes on October 06, 2023 -->

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="electionMod.css">
</head>

<body>
    <h1>Election Result</h1>

    <?php
        if(isset($_POST['submit'])){
            $candidates = $_POST['candidates'];
            $votes = $_POST['votes'];
            // use max() to get winner index from array
            $max = max($votes);
            $winnerIndex = array_search($max, $votes);
            $totalVote = 0; 
            foreach($votes as $v){
                $totalVote += $v;
            }
            echo "
            <table border='1'>
                <tr>
                    <th class='rowName'>Candidate Name</th>
                    <th class='rowName'>Votes</th>
                    <th class='rowName'>Percentage of Total Votes</th>
                    
                </tr>"; // foreach with combine to show array elements
                foreach(array_combine($candidates, $votes) as $can => $vot){
                    $percent = number_format(($vot / $totalVote) * 100, 2); // from totalVote foreach loop and creates another array per candidate
                    echo "
                    <tr>
                        <td class='infoRow'>$can</td>
                        <td class='infoRow'>$vot</td>";
                        
                        echo "<td class='infoRow'>$percent%</td>
                        </tr>";
                    
                }
                echo "
                <tr>
                    <th colspan='2' class='rowName'>Total Number of Votes</th>
                    <td colspan='2' class='infoRow1'>$totalVote</td>
                </tr>
                <tr>
                    <td colspan='4' class='winner'>
                        WINNER: $candidates[$winnerIndex] :D 
                    </td>
                </tr>
            </table>";
        }
    ?>
</body>