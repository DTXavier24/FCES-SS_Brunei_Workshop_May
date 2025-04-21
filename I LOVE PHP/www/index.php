<?php
require_once "flag.php";

function flag() {
    global $secretflag;
    echo "<br>🎉 Congratulations! Here's your flag: " . $secretflag;
}

function source() {
    echo "<br /><code>";
    highlight_string(file_get_contents(__FILE__));
    echo "</code>";
}

if (isset($_GET['input'])) {
    $string1 = $_GET['input'];
    echo "Original input: " . htmlspecialchars($string1) . "<br>";

    $target = 'ILOVEPHP';
    $result = preg_replace("/$target/", '', $string1);

    echo "After replacement: " . htmlspecialchars($result) . "<br>";

    if ($result === $target) {
        flag();
    }
}

source();
?>
