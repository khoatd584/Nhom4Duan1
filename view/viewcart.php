
    <main>
        <div class="cart_left">
            <h2>Bag</h2>
            <?php
            $tong = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh = $img_path.$cart[2];
                $ttien = $cart[3] * $cart[5];
                $tong += $ttien;
                $formatPrice = number_format($cart[3], 0,  ',', ',');
                echo ' <div class="infor_product_cart">
                <div class="img">
                    <img src="'.$cart[2].'" alt="">
                </div>
                <div class="infor">
                    <h3>'.$cart[1].'</h3>
                    <p>'.$cart[4].'</p>

                </div>
                <div class="price">
                    <span>'.$formatPrice.'<sup>đ</sup></span>
                    <a href="">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                    <div class="quanlity">
                        <p>Quanlity: <span>'.$cart[5].'</span></p>
                    </div>
                </div>
            </div>';
            }
            echo '
        </div>
        <div class="cart_right">
            <h2>Summary</h2>
            <div class="total">
                <div class="row1">
                    <span>Subtotal</span>
                    <p>$ 999</p>
                </div>
                <div class="row1 space">
                    <span>Estimated Delivery & Handling</span>
                    <p>Free</p>
                </div>
                <div class="row1 space">
                    <span>Total</span>
                    <p>'.$tong.'</p>
                </div>
                <div class="pay">
                    <button class="pay_btn" type="submit">PAY AWAY</button>
                </div>
            </div>
        </div>';
    ?>
    </main>
    <style>
        main {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.cart_left {
    width: 60%;
}

.cart_right {
    width: 30%;
}

.infor_product_cart {
    --gap: 20px;
    display: grid;
    grid-template-columns: 1fr 2fr 1fr;
    grid-gap: var(--gap);
    border-bottom: 1px solid #c4c4c4;
    padding: 15px 0px;
}

.price {
    position: relative;
}

.price a {
    font-size: 20px;
    position: absolute;
    bottom: -5%;
    right: -5%;
}

.quanlity {
    position: absolute;
    left: 0;
    bottom: 0;
}

.img {
    width: 90%;
}

.price {
    text-align: right;
}

.row1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 15px 0px;
}

.row1 span,
.row1 p {
    font-size: 15px;
}

.pay {
    text-align: center;
    margin: 0;
}

.pay_btn {
    width: 100%;
    background-color: #111111;
    color: #fff;
    padding: 15px 25px;
    border: none;
    border-radius: 4px;
}

.pay_btn:hover {
    background-color: #7e7e7e;
    color: #e2e2e2;
}

.space {
    margin-bottom: 25px;
    padding: 7px 0px;
    border-bottom: 0.2px solid #c4c4c4;
}

.img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
    </style>
    