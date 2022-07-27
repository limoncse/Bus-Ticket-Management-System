<?php 

// check if select set, and return true message and false message
function is_select_a_set($value='',$tmsg='', $fmsg='')
{
	if (isset($_GET["$value"])) {
		return $tmsg;
	}else{
		return $fmsg;
	}
}


// This function for recived get data and return its value and print messege if not selected set
function get_data_from_form($value='',$msg='')
{
	if (isset($_GET["$value"])) {
		return $_GET["$value"];
	}else{
		return $msg;
	}
}



function status_color_change($conn,	$id_no){

	$sql = "SELECT * FROM seat_info WHERE id = $id_no";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    $row = $result->fetch_assoc();
	    if ($row["actions"] == "pending") {
	    	echo "border-radius: 5px;background: #FFC300;pointer-events: none;cursor: default;";
	    }elseif ($row["actions"] == "block") {
	    	echo "border-radius: 5px;background: #aaaaaa;pointer-events: none;cursor: default;";
	    }else{
	    	echo "border-radius: 5px;background: #fff;";
	    }
	    
	} else {
	    echo "0 results";
	}
}

?>