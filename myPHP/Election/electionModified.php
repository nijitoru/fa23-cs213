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

            $candidates = $_POST['candidates'];
            $votes = $_POST['votes'];

            foreach($candidates as $can){
                echo "$can \n";
            }

            foreach($votes as $vot){
                echo "$vot \n";
            }

            echo "
            <table>
                <tr>
                    <td>Candidate Name</td>
                    <td>Votes</td>
                    <td>Total Percentage of Votes</td>
                </tr>
                <tr></tr>";
                foreach($candidates as $can){
                    echo "<td>$can\n</td>";
                }
                echo "<tr></tr>";
                foreach($votes as $vot){
                    echo "$vot \n";
                }
                echo "
            </table>
            ";
        }

    ?>

</body>
