<?php include '../config.php';?>
<?php include 'header.php';?>
		<div class="content">
			<h2>Home Page</h2>
	
				<table width="100%" border="0">
					<thead>
						<tr>
							<th>Seat</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone No.</th>
							<th>Pay. Method</th>
							<th>transaction. Id</th>
							<th>Status</th>
							<th>Action</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							$sql = "SELECT * FROM seat_info";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
						?>

						<tr>
							<td><?php echo $row["seat_no"];?></td>
							<td><?php echo $row["name"];?></td>
							<td><?php echo $row["email"];?></td>
							<td><?php echo $row["mobile"];?></td>
							<td><?php echo $row["payment_method"];?></td>
							<td><?php echo $row["tranjection_id"];?></td>
							<td><?php echo $row["actions"]; if($row["actions"]=="pending"){?><img src="../images/pending.gif" alt="" height="18"><?php }?></td>
							<td align="center">
								<?php if($row["actions"]=="pending"){
								echo '<a href="action.php?id='.$row["id"].'&accept=1">Accept</a>';
								 }else if ($row["actions"]=="block"){
									echo '<img src="../images/done.png" alt="" height="15">';
								 }else{
								 	echo " ";
								 }?>


							</td>
							<td>
								<?php
									echo '<a href="action.php?id='.$row["id"].'&delete=1"><img src="../images/del.png" alt="">Delete</a>';
								?>
							</td>
						</tr>
						<?php }}?>
					</tbody>
				</table>


		</div>
<?php include 'footer.php';?>