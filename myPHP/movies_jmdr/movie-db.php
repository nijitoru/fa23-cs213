<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Movie Database Search</title>
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
                $field = $_POST['field'];
                $query = $_POST['search'];
                $name = $_POST['user'];

                date_default_timezone_set('Pacific/Guam');

                $fieldFormat = strtoupper($field);
                $hour = date("H");

                if($hour >= 0 && $hour < 12){
                    if($field == 'actors')
                        echo "Good morning, ".$name.'. You searched the database by "LEAD ACTOR".<br>';
                    else
                        echo "Good morning, ".$name.'. You searched the database by "'.$fieldFormat.'."<br>';
                } else if ($hour >= 12 && $hour <= 18){
                    echo "Good afternoon, ".$name."You searched the database by ".$fieldFormat;
                } else {
                    echo "Good evening, ".$name."You searched the database by ".$fieldFormat;
                }
                
                if($field == 'movieID'){
                    $sql = "SELECT * FROM favmovies_jmdr WHERE movieID = '$query'";
                } else if ($field == 'movieTitle'){
                    $sql = "SELECT * FROM favmovies_jmdr WHERE movieTitle LIKE '$query%'";
                } else if ($field == 'actors'){
                    $sql = "SELECT * FROM favmovies_jmdr WHERE actors LIKE '$query%'";
                } else if ($field == 'genre'){
                    $sql = "SELECT * FROM favmovies_jmdr WHERE genre LIKE '$query%'";
                } else if ($field == 'revenue'){
                    $sql = "SELECT * FROM favmovies_jmdr WHERE revenue = '$query'";
                } else {
                    $sql = "SELECT * FROM favmovies_jmdr WHERE yearRelease = '$query'";
                }
                
                $result = $conn->query($sql);
                $count = $result->num_rows;

                if($count <= 0)
                    echo("None of the movies matched your search criteria.<br>");
                else if($count == 1){
                    echo 'We only found '.$count.' movie(s) that matched your search criteria.';
                } else {
                    echo 'We found '.$count.' movie(s) that matched your search criteria.';
                }

                $header = array('movieID', 'movieTitle', 'actors', 'runTime', 'genre', 'revenue', 'yearRelease');

                if($count >= 1){
                    echo "<table><tr>";
                        foreach($header as $h)
                            echo "<th>".$h."</th>";
                    echo"</th></tr>";

                    if ($result->num_rows > 0) {
                        echo '<tr>';
                    while($row = $result->fetch_assoc()){
                        foreach($row as $key => $fieldValue){
                            echo '<td>'.$fieldValue.'</td>';
                        }
                        echo '</tr><br>';
                    }     
                    echo '</table>';
                    }
                }
                echo "Guam, Where America's Days Begins.<br>Chamorru Time: ".date("Y-m-d h:i:sA");
                mysqli_close($conn);
            }
        ?> <br>
        <a href="movie-db.html">
            <button type="button">Return</button>
        </a>
    </body>
</html>