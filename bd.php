<?php

$connect = mysqli_connect("localhost", "root" , "" , "wehaveayourblog");
if (!$connect) {
	die("Error connect to DataBase!");
}