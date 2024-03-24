<?php

include_once("dbh.php");

$prodID = $_POST["prodID"];
$prodName = $_POST["productname"];
$prodDesc = $_POST["productdesc"];
$prodCategory = $_POST["category"];
$prodPrice = $_POST["price"];
$prodPicture = $_POST["productphoto"];

echo $prodID;

