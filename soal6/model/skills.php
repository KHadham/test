<?php 
class skill { 
function tabelskill($id){
	global $db;
	$sql ="SELECT * FROM skills where user_id=$id
	
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
