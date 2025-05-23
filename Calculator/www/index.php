<?php
function add($a, $b){
	return $a + $b;
}

function minus($a, $b){
	return $a - $b;
}

function multiply($a, $b){
	return $a * $b;
}

function divide($a, $b){
	return $a / $b;
}


function source() {
    echo "<br /><code>";
    highlight_string(file_get_contents(__FILE__));
    echo "</code><hr>";
}
source();

try{
    if (!isset($_GET['operator'], $_GET['num1'], $_GET['num2'])) {
        echo "Missing required parameters. Usage: ?operator=/operator/&num1=/number/&num2=/number/";
        exit;
    }
    $operator = $_GET['operator'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    echo $operator($num1,$num2);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
