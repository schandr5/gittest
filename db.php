<?php
$connect=mysqli_connect('localhost','root','123','studdb');

if(mysqli_connect_errno($connect))
{
	echo 'Failed to connect';
}

?>