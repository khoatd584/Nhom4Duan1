<?php
function insert_taikhoan($email,$user,$pass,$tel) {
    $sql = "INSERT INTO taikhoan(email,user,pass,tel) VALUES('$email','$user','$pass','$tel')";
    pdo_execute($sql);
}

function checkuser($user,$pass) {
    $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id,$user,$email,$pass,$address,$tel) {
    $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}

function checkemail($email) {
    $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadall_taikhoan() {
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id) {
    $sql = "DELETE FROM taikhoan WHERE id=".$id;
    pdo_execute($sql);
}
?>