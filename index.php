<?php include "config.php";?>
<?php include "functions.php";?>
<?php include "header.php";?>
	<div id="container">
	
	<!-- include left Side -->
	<?php include "left-side.php";?>

	<!-- include right Side -->
	<?php include "right-side.php";?>
</div>

	<!-- ====================php code here=============== -->
	<!-- this code for update database -->
	<?php
	
		
		if (isset($_GET['update'])) {
			$id = $_GET["id"];
			$name = $_GET["name"];
			$mobile_no = $_GET["mobile_no"];
			$email = $_GET["email"];
			$address = $_GET["address"];
			$gender = $_GET["gender"];
			$age = $_GET["age"];
			$nid_no = $_GET["id_no"];
			$nationality = $_GET["nationality"];
			$boarding_point = $_GET["boarding_point"];
			$dropping_point = $_GET["dropping_point"];
			$payment_method = $_GET["payment_method"];
			$tranjection_id = $_GET["tranjection_id"];
			$taka = $_GET["taka"];
			$seat_no = $_GET["seat_no"];
			$termconditions = $_GET["termconditions"];


			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE seat_info SET name='$name',mobile='$mobile_no',email='$email',address='$address',gender='$gender',age=$age,nid='$nid_no',nationality='$nationality',boarding_point='$boarding_point',droping_point='$dropping_point',taka=$taka,payment_method='$payment_method',tranjection_id='$tranjection_id',actions='$termconditions' WHERE id = $id";
			if ($conn->query($sql) === TRUE) {
			    header( "refresh:5;url=wherever.php");
			    echo "<center><span style='position:relative;top:-350px;color:green;width:100%;'><img src='images/done.gif' height='150' style='border:5px solid #ED1C24;box-shadow:0px 0px 200px #000;border-radius:50%'></span></center><meta http-equiv='refresh' content='5;url=index.php'>";
			} else {
			    echo "Error updating record: " . $conn->error;
			}
		}
		

	?>


<?php include "footer.php"; ?>