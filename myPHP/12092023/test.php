<!DOCTYPE html>
<html lang="en">

</html>

<body>
    <?php
    if(isset($_POST['submit'])){
        include "test-radio.html";

        $age = $_POST['age'];
        $favLang = $_POST['fav_language'];
        $msg = "";
        if(empty($age)){
            $msg = "Enter age, please."
            exit($msg);
        }
        else{
            if($age < 0){
                exit("Enter a positive number, please.");
            }
        }

        switch($favLang){
            case "html":
                $strLang = "HTML";
                break;
                case "css":
                    $strLang = "CSS";
                    break;
                    
        }

        echo "Your favorite language is ", $favLang;
        echo "<br>You are ", $age, "years old.";
    }
    ?>
</body>