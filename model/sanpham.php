<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm) {
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) VALUES('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id) {
    $sql = "DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham_home() {
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function loadall_sanpham($kyw = "",$iddm = 0) {
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($kyw != "") {
        $sql.=" AND name LIKE '%".$kyw."%'";
    }
    if($iddm > 0) {
        $sql.=" AND iddm ='".$iddm."'";
    }
    $sql.=" ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id) {
    $sql = "SELECT * FROM sanpham WHERE id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_ten_dm($iddm) {
    if($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}

function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh) {
    if($hinh != "") {
        $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' WHERE id=".$id;
    } else {
        $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' WHERE id=".$id;
    }
    pdo_execute($sql);
}
?>
