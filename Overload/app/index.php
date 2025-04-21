<?php

function source() {
    echo "<br /><code>";
    highlight_string(file_get_contents(__FILE__));
    echo "</code>";
}

if (isset($_POST['input'])) {
    $input=$_POST['input'];
    if (preg_match("/^(.*?)+$/s", $input)) {
        echo "TRY HARDERRRRRR!!!!!!";
    } else {
        echo "<br>🎉 Congratulations! Here's your flag: " . file_get_contents('flag.txt');
    }
}

source();
?>
