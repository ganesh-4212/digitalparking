<?php
	if(isset($_POST['allot'])){
		extract($_POST);
		include("../dbconnect.php");
		$query="select a.id,b.address,b.name from slot AS a,parking as b where b.id=a.plot_id and a.vtype_id=$vtype_id and a.is_taken=0 ORDER by b.priority, a.priority";
		$result=$con->query($query);
		if ($row=$result->fetch_assoc()) {
			$slot_id=$row['id'];
			$query="INSERT INTO vehicle ( vnum, owner, login,vtype_id,slot_id) VALUES ( '$vnum', '$owner', sysdate(),$vtype_id,$slot_id)";
			$con->query($query);
			if (!$con->error) {
				$query="UPDATE slot SET is_taken = 1 WHERE id = $slot_id";
				$con->query($query);
				$message=array("succes"=>true,"slot_id"=>$slot_id,"plot_name"=>$row['name'],"address"=>$row['address']);
			}else{
				$message=array("succes"=>false,"error"=>$con->error);
			}
		}else{
			$message=array("succes"=>false,"error"=>"No slots available");
		}
		echo json_encode($message);
		$con->close();
	}
?>	