


    <?php
$link = mysqli_connect("localhost", "root", "", "onlinenotes");


if (mysqli_connect_error()) {
	
	die("Connection Failed" . mysqli_connet_error());

	echo "<script>window.alert('Hi!')</script>";
}

?>