<?php
function viewcart()
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $formatPrice = number_format($cart[3], 0,  ',', ',');    
        $xoasp = '<a href="./index.php?act=delcart&idcart='.$i.'"><ion-icon name="trash-outline"></ion-icon></a>';
        echo ' <div class="infor_product_cart">
                <div class="img">
                    <img src="' . $cart[2] . '" alt="">
                </div>
                <div class="infor">
                    <h3>' . $cart[1] . '</h3>

                </div>
                <div class="price">
                    <span>' . $formatPrice . '<sup>đ</sup></span>
                    <div>
                    ' . $xoasp . '
                        </div>
                    <div class="quanlity">
                    <p>Quanlity: <span>' . $cart[4] . '</span></p>
                    </div>
                    </div>
                    </div>';
        $i += 1;
    }
    $formatPriceTotal = number_format($tong, 0,  ',', ',');
    echo '
        </div>
        <div class="cart_right">
            <h2>Summary</h2>
            <div class="total">
                <div class="row1">
                    <span>Subtotal</span>
                    <p>' . $formatPriceTotal . '</p>
                </div>
                <div class="row1 space">
                    <span>Estimated Delivery & Handling</span>
                    <p>Free</p>
                </div>
                <div class="row1 space">
                    <span>Total</span>
                    <p>' . $formatPriceTotal . '</p>
                </div>
            </div>';
}

function total()
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $formatPrice = number_format($tong, 0,  ',', ',');
        $xoasp = '<a href="./index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xoa"></a>';
    }
    echo '
    <div class="row1">
    <span>Subtotal</span>
    <p>' . $formatPrice . '</p>
</div>
<div class="row1 space">
    <span>Estimated Delivery & Handling</span>
    <p>Free</p>
</div>
<div class="row1 space">
    <span>Total</span>
    <p> ' . $formatPrice . '</p>';
}

function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser, $user, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$user','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_bill($iduser)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if($iduser > 0) $sql.=" AND iduser=".$iduser;
    $sql.=" ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "New orders";
            break;
        case '1':
            $tt = "Processing orders";
            break;
        case '2':
            $tt = "Processing orders";
            break;
        case '3':
            $tt = "Order delivered";
            break;
        default: 
            $tt = "New orders";
            break;
    }
    return $tt;
}

function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}


function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        $formatPrice = number_format($cart['price'], 0,  ',', ',');
        echo ' <div class="infor_product_cart">
                <div class="img">
                    <img src="' . $cart['img'] . '" alt="">
                </div>
                <div class="infor">
                    <h3>' . $cart['name'] . '</h3>

                </div>
                <div class="price">
                    <span>' . $formatPrice . '<sup>đ</sup></span>
                    <div class="quanlity">
                    <p>Quanlity: <span>' . $cart['soluong'] . '</span></p>
                    </div>
                    </div>
                    </div>';
        $i += 1;
    }
}
