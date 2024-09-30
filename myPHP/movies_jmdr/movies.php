<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Favorite Movies</title>
        <link rel="stylesheet" href="movies.css">
    </head>
    <body>
        <?php
            $serverName = "localhost";
            $username = "jmdr";
            $password = "4321";
            $dbname = "movies_db_jmdr";

            $conn = new mysqli($serverName, $username, $password, $dbname);

            // make new db
            // $sql = "CREATE DATABASE movies_db_jmdr";
            // if ($conn->query($sql) === TRUE) {
            //     echo "Database created successfully";
            // } else {
            //     echo "Error creating database: " . $conn->error;
            // }

            // new table in db
            // $sql = "CREATE TABLE favmovies_jmdr (
            //     movieID int(5) AUTO_INCREMENT PRIMARY KEY,
            //     movieTitle varchar(255),
            //     actors varchar(255),
            //     runTime int(4),
            //     genre varchar(255),
            //     revenue double,
            //     yearRelease int(4)
            // )";
            // if ($conn->query($sql) === TRUE) {
            //     echo "Table created successfully";
            // } else {
            //     echo "Error creating table: " . $conn->error;
            // }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $movie = $_POST['movie'];
                //var_dump($movie);

                // regEx if statements
                if(!preg_match('/^[1-9]{1,5}$/', $movie[0])){ 
                    echo "<p class='error_code''><b>Error:</b> Invalid Movie ID. <br><br>
                        Numbers from 1 - 5 only.</p>";
                    exit();
                }
                if(!preg_match('/^[a-zA-Z0-9\s]+$/', $movie[1])){
                    echo "<p class='error_code''><b>Error:</b> Invalid Movie Title. <br><br>
                        Letters, numbers and spaces only.</p>";
                    exit();
                }
                if(!preg_match('/^[a-zA-Z\s-]+$/', $movie[2])){
                    echo "<p class='error_code''><b>Error:</b> Invalid actor. <br><br>
                        Letters and spaces only.</p>";
                    exit();
                }
                if(!preg_match('/^\d{2,3}$/', $movie[3])){
                    echo "<p class='error_code''><b>Error:</b> Invalid run time. <br><br>
                        Total minutes only.</p>";
                    exit();
                }
                if(!preg_match('/^[a-zA-Z\s\/-]+$/', $movie[4])){
                    echo "<p class='error_code''><b>Error:</b> Invalid genre. <br><br>
                        Letters, spaces, and forward slash only for the genre.</p>";
                    exit();
                }
                if(!preg_match('/^^[0-9]{2,4}$/', $movie[6])){
                    echo "<p class='error_code''><b>Error:</b> Invalid year released.</p>";
                    exit();
                } else {
                    if(!$movie[6] >= 1895 && $movie[6] <= 2023){
                        die("Years ranging from 1895 - 2023 only.");
                    }
                }
            }

            // inserts input to db
            $record = "INSERT INTO favmovies_jmdr(movieID, movieTitle, actors, runTime, genre, revenue, yearRelease) 
                VALUES('$movie[0]', '$movie[1]', '$movie[2]', '$movie[3]', '$movie[4]', '$movie[5]', '$movie[6]')";
            if ($conn->query($record) === TRUE) {
                echo "Record inserted successfully.<br>";
            } else {
                echo "Error inserting records: " . $conn->error;
            }
            $result = $conn->query("SELECT * FROM favmovies_jmdr");

            // creates table for list of movies inputted
            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr>
                    <th>Movie ID</th>
                    <th>Title</th>
                    <th>Actors</th>
                    <th>Run Time</th>
                    <th>Genre</th>
                    <th>Revenue</th>
                    <th>Year</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["movieID"] . "</td>";
                    echo "<td>" . $row["movieTitle"] . "</td>";
                    echo "<td>" . $row["actors"] . "</td>";
                    echo "<td>" . $row["runTime"] . "</td>";
                    echo "<td>" . $row["genre"] . "</td>";
                    echo "<td>" . $row["revenue"] . "</td>";
                    echo "<td>" . $row["yearRelease"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </body>
</html>