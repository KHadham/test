<?php 
class master { 
function SedotDataDiTabelMaster(){
	global $db;
	$sql ="SELECT * FROM user
			ORDER BY id ASC
			";
			$rs  = $db->Execute($sql);
		if(!$rs) {
			return $db->ErrorMsg();	
		}
		else {
			return $rs;
		}
}
}
?>
