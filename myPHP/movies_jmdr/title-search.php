<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Searched Movie Title</title>
        <link rel="stylesheet" href="movies.css">
    </head>
    <body>
        <?php
            $serverName = "localhost";
            $username = "jmdr";
            $password = "4321";
            $dbname = "movies_db_jmdr";

            $conn = new mysqli($serverName, $username, $password, $dbname);

            if(isset($_POST['submit'])){
                $movieTitle = $_POST['movieTitle'];
                if(empty($movieTitle)){
                    die("<br>Please enter the title of your favorite movie.");
                }

            $sql = "SELECT * FROM favmovies_jmdr WHERE movieTitle = '$movieTitle'";
            $result = $conn->query($sql);

            $header = array('movieID', 'movieTitle', 'actors', 'runTime', 'genre', 'revenue', 'yearRelease');
            echo "<table><tr>";
                foreach($header as $h)
                echo "<th>".$h."</th>";
            echo"</th></tr>";

            if ($result->num_rows > 0) {
                echo '<tr>';
                while($row = $result->fetch_assoc()){
                    var_dump($row);
                    echo "<pre>";
                    print_r($row);
                    echo "</pre>";
                    foreach($row as $key => $fieldValue){
                        echo '<td>'.$fieldValue.'</td>';
                    }
                    // echo '<td>'.$row['movieID'].'</td>'.'<td>'.$row['movieTitle'].'</td>'.
                    // '<td>'.$row['actors'].'</td>'.'<td>'.$row['runTime'].'</td>'.
                    // '<td>'.$row['genre'].'</td>'.'<td>'.$row['revenue'].'</td>'.
                    // '<td>'.$row['yearRelease'].'</td>';
                }
                echo '</tr>';
                echo '</tr></table>';
            }
            else{
                die("<br>Invalid title.");
            }
            mysqli_close($conn);
            }
        ?>
    </body>
</html>