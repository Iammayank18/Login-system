<?php

$server = "localhost";
$user = 'root';
$password = "";
$database = 'users';

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
	# cechode.
?>
	<script>
		alert("connection LOST !");
	</script>
<?php

}



?>