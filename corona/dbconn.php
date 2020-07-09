<?php
$server="localhost";
$user="root";
$passward="";
$db="corona";
$conn=mysqli_connect($server,$user,$passward,$db);
if(!$conn)
{
	?>
	<script>
		alert("connection error");
	</script><?php
}

?>
