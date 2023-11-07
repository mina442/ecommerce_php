<?php
include '../connect.php';
$users_names       = filterRequest("users_names");
$users_email       = filterRequest("users_email");
$users_phone       = filterRequest("users_phone");
$users_verifiycode = "0";
$users_password    = sha1("users_password");
echo $users_names      ;
echo$users_email      ;
echo$users_phone      ;
echo$users_verifiycode ;
echo$users_password    ;
$stmt = $con ->prepare("SELECT * FROM `users` WHERE users_email = ? OR users_phone = ? ");
$stmt-> execute(array($users_email,$users_phone));
$count = $stmt-> rowCount();
if($count > 0 ){
    echo json_encode(array("status" => "failure"));
}else{
    $data = array(

        "users_names"       => $users_names,
        "users_email"       => $users_email,
        "users_phone"       => $users_phone,
        "users_verifiycode" => "0",
        "users_password"    => $users_password,
    )
    ;
 insertData("users",$data);
}
