<?php

header("Access-Control-Allow-Origin: header");
header("Access-Control-Allow-Origin: *");

  include 'index.php';

  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  // $username = $_POST['username'];

  $sql = "UPDATE users SET fullname = '$fullname' WHERE id=$id";
  $isSuccess = $con->query($sql);

  if ($isSuccess) {

  	$cek = "SELECT * FROM users WHERE id = $id";
	$result = mysqli_fetch_array(mysqli_query($con, $cek));
	$res['is_success'] = true;
	$res['value'] = 1;
	$res['message'] = "Berhasil edit user";
	$res['fullname'] = $result['fullname'];
	$res['id'] = $result['id'];
  } else {
    $res['is_success'] = false;
    $res['value'] = 0;
    $res['message'] = "Gagal edit user";
  }

  echo json_encode($res);

 ?>
