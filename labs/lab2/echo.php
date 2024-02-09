<?php 
if(empty($_REQUEST["data"])){
exit("please enter the input filed 'data'");
} 
$input=htmlentities($_REQUEST["data"]);
echo("The input from the request is <strong>" .$input. "</strong>.<br>");
?>
