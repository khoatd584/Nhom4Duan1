
    <main>
        <div class="cart_left">
            <h2>Bag</h2>
            <?php
            viewcart();
        ?>
                <div class="pay">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <a href="./index.php?act=bill"><input class="pay_btn" type="button" value="PAY AWAY"></a>
                <?php
                } else {
                ?>
                    <a href="./index.php?act=dangnhap"><input class="pay_btn" type="button" value="PAY AWAY"></a>
                <?php
                }
                ?>
                    </div>
                </div>
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
    