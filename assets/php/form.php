<?php
if($_POST["Message"]) {
mail("repaintsplus@outlook.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>