<?php
$servername = "localhost";
$username = "idiot";
$password = "iamanidiot123";
$dbname = "movie_database_jmdr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql = "CREATE TABLE IF NOT EXISTS myFavMovies01_jmdr (
    movie_id int PRIMARY KEY,
    title VARCHAR(255),
    actors VARCHAR(255),
    run_time INT(4),
    genre VARCHAR(255),
    revenue double,
    year_released INT(4)
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Insert data into table
$movie_id = $_POST['movie_id'];
$title = $_POST['title'];
$actors = $_POST['actors'];
$run_time = $_POST['run_time'];
$genre = $_POST['genre'];
$year_released = $_POST['year_released'];

$sql_insert = "INSERT INTO myFavMovies01_jmdr (movie_id, title, actors, run_time, genre, year_released)
VALUES ('$movie_id', '$title', '$actors', '$run_time', '$genre', '$year_released')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $conn->error;
}

$conn->close();
?>