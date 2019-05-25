<?php 
//General Controller
include "General_Controller.php";
$gen_controller  = new General_Controller();

//Model Global
include "model/General_Model.php";
$gen_model      = new General_Model();

include "model/master.php";
include "model/skills.php";

$mst = new master();
$skl = new skill();

$act="";
if(isset($_GET['do_act'])){
  $act = $_GET['do_act'];
}

$id_parameter="";
if(isset($_GET['id_parameter'])){
      $id_parameter =$_GET['id_parameter'];
}

if($act=="" or $act==null) {
//View
include "view/header.php";
include "view/tabel_utama.php";
include "view/footer.php";
}

else if($act=="name_add"){
  //Proses
  $insert_data = array();
  $insert_data['name']           = $_POST['nama'];
  
  if($insert_data['name']!=""){
    if($gen_model->Insert('user',$insert_data)=="OK"){
      $gen_controller->redirect_alert('','data Berhasil di tambah');
    }
    else {
      $gen_controller->redirect_alert('window_back','Terjadi kesalahan1 ');
    }
  }
  else {
    $gen_controller->redirect_alert('window_back','Terjadi kesalahan2');
  }
}

else if($act=="skill_add"){
  //Proses
  $insert_data = array();
  $insert_data['skill_name']           = $_POST['namaskill'];
  $insert_data['user_id']           = $_POST['iduser'];
  
  if($insert_data['skill_name']!=""){
    if($gen_model->Insert('skills',$insert_data)=="OK"){
      $gen_controller->redirect_alert('','data Berhasil di tambah');
    }
    else {
      $gen_controller->redirect_alert('window_back','Terjadi kesalahan1 ');
    }
  }
  else {
    $gen_controller->redirect_alert('window_back','Terjadi kesalahan2');
  }
}

else {
$gen_controller->response_code(http_response_code());
}
?>
