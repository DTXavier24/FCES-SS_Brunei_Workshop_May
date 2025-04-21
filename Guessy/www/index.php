<?php
require_once "flag.php";

function flag() {
    global $secretflag;
    echo "<br>🎉 Congratulations! You guess the correct number Here's your flag: " . $secretflag;
}

function source() {
    echo "<br /><code>";
    highlight_string(file_get_contents(__FILE__));
    echo "</code>";
}

if (isset($_GET['num'])) {
    $guess = rand(111111,999999);
    $num = $_GET['num'];

    if (strcmp($_GET['num'], $guess ) == 0) {
        flag();
    }
    else{
        echo "<br>The correct number was " . $guess;
    }
}

source();
?>
