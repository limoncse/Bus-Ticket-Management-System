<?php include '../config.php';?>
<?php include 'header.php';?>
<?php 


//this code for accept seat (accept option)
if (isset($_GET['accept'])) {
			$id = $_GET["id"];
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE seat_info SET actions='block' WHERE id = $id";
			if ($conn->query($sql) === TRUE) {
			    echo "<center><span style='position:relative;top:150px;color:green;width:100%;'><img src='../images/done.gif' height='150' style='border:5px solid #ED1C24;box-shadow:0px 0px 200px #000;border-radius:50%'></span></center><meta http-equiv='refresh' content='5;url=home.php'>";
			} else {
			    echo "Error updating record: " . $conn->error;
			}
		}


//this code for clear all  datha (Delete option)
if (isset($_GET['delete'])) {
			$id = $_GET["id"];
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "UPDATE seat_info SET name=' ',mobile=' ',email=' ',address=' ',gender=' ',age=0,nid=' ',nationality=' ',boarding_point=' ',droping_point=' ',taka=0,payment_method=' ',tranjection_id=' ',actions=' ' WHERE id = $id";
			if ($conn->query($sql) === TRUE) {
			    echo "<center><span style='position:relative;top:150px;color:green;width:100%;'><img src='../images/done.gif' height='150' style='border:5px solid #ED1C24;box-shadow:0px 0px 200px #000;border-radius:50%'></span></center><meta http-equiv='refresh' content='5;url=home.php'>";
			} else {
			    echo "Error updating record: " . $conn->error;
			}
		}
?>