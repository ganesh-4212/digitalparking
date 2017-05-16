<?php
	if(isset($_POST['id'])){
		extract($_POST);
		include("../dbconnect.php");
		$query="UPDATE vehicle inner join slot on vehicle.slot_id=slot.id  SET vehicle.logout=sysdate(),slot.is_taken=0 where vehicle.id=$id";
		$con->query($query);
		if ($con->error) {
			$message=array("succes"=>false,"error"=>"somethimg went wrong");
		}else{
            $query="SELECT a.id,a.vnum, a.`owner`,a.`vtype_id` ,c.rent,GREATEST((TIMESTAMPDIFF(HOUR, a.`login`, a.`logout`)*c.rent),c.rent) total_rent  FROM `vehicle` as a,vtype as c WHERE a.vtype_id=c.id and a.`logout` is NOT NULL and a.id=$id";
            $result=$con->query($query);
            if ($row=$result->fetch_assoc()) {
                $message=array("succes"=>true,"data"=>$row);
            }else{
                $message=array("succes"=>false,"error"=>"somethimg went wrong");
            }
		}
		echo json_encode($message);
		$con->close();
	}
?>
