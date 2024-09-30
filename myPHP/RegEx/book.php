<!-- Name: RegEx Project
Purpose: Return two books after user input using regular expressions
Programmer: Judy Marie Delos Reyes on October 22, 2023 -->
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="book-sum.css">
</head>

<body>
    <?php
        include "book-info.html";
        echo "<br>";
        $books = array($_POST['book1'], $_POST['book2']);
        $titleRegex = "/^[a-zA-Z ]+$/";
        $isbnRegex = "/^\d{13}$/";
        $pagesRegex = "/^\d{2,4}$/";
        if (isset($_POST['submit'])) {
            $header = array("Book Title", "ISBN", "Number of Pages");
            echo "<table border='1px'><tr>";
            foreach ($header as $headerItem) {
                echo "<th>$headerItem</th>";
            }
            echo "</tr>";
            foreach ($books as $book) {
                list($title, $isbn, $pages) = array_map('trim', $book);
                if (!preg_match($titleRegex, $title)) {
                    die("Invalid book title: \"$title\". It should contain only letters.");
                }
                if (!preg_match($isbnRegex, $isbn)) {
                    die("Invalid ISBN for \"$title\". It should contain exactly 13 digits.");
                }
                if ($pages < 50 || $pages > 1000) {
                    die("Invalid number of pages for \"$title\". Pages should be between 50 and 1000 inclusive.");
                }
                $formattedIsbn = substr($isbn, 0, 3) . "-" . substr($isbn, 3, 1) . "-" . substr($isbn, 4, 2) . "-" . substr($isbn, 6, 7);
                echo "<tr><td>$title</td><td colspan='auto'>$formattedIsbn</td><td>$pages</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>