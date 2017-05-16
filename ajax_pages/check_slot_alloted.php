<?php
	if(isset($_POST['vnum'])){
		extract($_POST);
		include("../dbconnect.php");
		$query="SELECT a.id,a.vnum, a.`owner`,a.`vtype_id`, b.id slot_id FROM `vehicle` as a,slot as b WHERE a.slot_id=b.id and a.`logout` is NULL and b.is_taken=1 and vnum='$vnum'";
		$result=$con->query($query);
		if ($row=$result->fetch_assoc()) {
			$message=array("succes"=>true,"data"=>$row);
		}else{
			$message=array("succes"=>false,"error"=>"No slots available");
		}
		echo json_encode($message);
		$con->close();
	}
?>
