
<?php
    $servername = "localhost";
    $username = "idiot";
    $password = "iamanidiot123";
    $dbname = "movie_database_jmdr";

    $idRegex = "/^\d{4}$/";
    $titleRegex = "/^[A-Za-z0-9\s]+$/";
    $actorRegex = "/^[A-Za-z\s'-]+$/";
    $runRegex = "/^[1-9][0-9]*$/";
    $genreRegex = "/^[A-Za-z0-9\s]+$/";
    $yearRegex = "/^[0-9]{4}$/";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if(isset($_POST['submit'])){
        $movie = $_POST['movie'];
        //var_dump($movie);

        $fields = implode(',', array_keys($movie));
        $values = implode("','", $movie);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        // $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        // if ($conn->query($sql) == TRUE) {
        //     echo "Database created successfully<br>";
        // } else {
        //     echo "Error creating database: " . $conn->error;
        // }
        
        // $sql = "CREATE TABLE IF NOT EXISTS myfavmovies01_jmdr (
        //     movieID int PRIMARY KEY,
        //     movieTitle varchar(255),
        //     actors varchar(255),
        //     runningTime int(4),
        //     genre varchar(255),
        //     revenue double,
        //     yearRelease int(4)
        // )";

        // if ($conn->query($sql) === TRUE) {
        //     echo "Table myfavmovies01_jmdr created successfully<br>";
        // } else {
        //     echo "Error creating table: " . $conn->error;
        // }

        $conn->select_db($dbname);

        // $insertQuery = "INSERT INTO myfavmovies01_jmdr (movieID, movieTitle, actors, runningTime, genre, year) 
        //     VALUES
        //     (1, 'La La Land', 'Ryan Gosling, Emma Stone', '128m', 'Romance/Musical/Drama', 2016),
        //     (2, 'Interstellar', 'Matt Damon', '2h 49m', 'Drama/Sci-fi', 2014),
        //     (3, 'Whiplash', 'Miles Teller, J.K. Simmons', '1h 47m', 'Drama/Indie', 2014),
        //     (4, 'Scott Pilgrim vs. the World', 'Michael Cera, Mary Elizabeth Winstead', '1h 52m', 'Action/Romance', 2010),
        //     (5, 'Forrest Gump', 'Tom Hanks, Robin Wright, Sally Field', '2h 22m', 'Drama/Romance', 1994)";

        $record = "INSERT INTO myfavmovies01_jmdr(movieID, movieTitle, actors, runTime, genre, revenue, yearRelease) 
                VALUES('$movie[0]', '$movie[1]', '$movie[2]', '$movie[3]', '$movie[4]', '$movie[5]', '$movie[6]')";
            if ($conn->query($record) === TRUE) {
                echo "Records inserted successfully<br>";
            } else {
                echo "Error inserting records: " . $conn->error;
            }
        $result = $conn->query("SELECT * FROM myfavmovies01_jmdr");

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
    }
?>