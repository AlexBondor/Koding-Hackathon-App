<?php
$a = $_POST["sentence"];
//print_r ($a);

if ($a == "I have read and accepted the terms and conditions" || $a == "i have read and accepted the terms and conditions") {
    header("Location: ../final.php");
    die();
} 
else {
    echo "<h1 class=\"title-middle\">Incorrect sentence! Redirecting...</h1>";
    echo "<script>setTimeout(\"location.href = '../base.php?id=3';\",2000);</script>";
    die();
}
?>