<?php
require_once "flag.php";


function source() {
    echo "<br /><code>";
    highlight_string(file_get_contents(__FILE__));
    echo "</code>";
}

if (isset($_GET['input1'])) {
    if (hash("md5", $_GET["input1"]) == "0") {
        echo "<br>Congruatulation! Here's first half there of the flag: " . $flag1;

        if (isset($_GET['input2'])){
            if (hash("sha1", $_GET["input2"]) == $_GET["input2"]){
                echo "<br>Congruatulation! Here's second half there of the flag: " . $flag2;
            }
            else{
                echo "<br>Are you really sure it's matching???";
            }
        }
    }
    else{
        echo "<br>Are you sure it's matching???";
    }
}

source();
?>
