<?php

function source() {
    echo "<br /><code>";
    highlight_string(file_get_contents(__FILE__));
    echo "</code><hr>";
}

source();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    @include($page . ".php");
} else {
    echo "Welcome! Use <code>?page=home</code> to view pages.";
}
?>
