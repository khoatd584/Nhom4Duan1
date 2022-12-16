<main>
        <div class="order">
            <h1>Your order is complete!</h1>
            <p>You will be receiving a confirmation email with order datails.</p>
            <ion-icon name="checkbox-outline"></ion-icon>
            <?php
            if(isset($bill) && (is_array($bill))) {
                extract($bill);
                $formatPrice = number_format($bill['total'], 0,  ',', ',');
            }
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Payment Methods</th>
                    <th>Order Date</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>NIKE<?=$bill['id'];?></td>
                    <td><?=$bill['bill_name'];?></td>
                    <td><?=$bill['bill_address'];?></td>
                    <td><?=$bill['bill_tel'];?></td>
                    <td><?=$bill['bill_email'];?></td>
                    <td><?=$bill['bill_pttt'];?></td>
                    <td><?=$bill['ngaydathang'];?></td>
                    <td><?=$formatPrice;?></td>
                </tr>
            </table>
            <div class="order_btn">
                <a class="order_link" href="index.php"><input type="button" value="Home" /></a>
                <a class="order_link" href="index.php?act=shop"><input type="button" value="Continue Shopping" /></a>
            </div>
        </div>
    </main>
    <style>
        main {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .order ion-icon {
            margin-bottom: 15px;
            font-size: 4rem;
            color: #00d664;
        }
        
        .order {
            text-align: center;
        }
        
        .order_btn {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 15px;
        }
        
        input[type="button"] {
            cursor: pointer;
            padding: 10px 20px;
            text-transform: uppercase;
            color: white;
            background-color: #000;
            border-radius: 8px;
            border: none;
        }
        
        .order input[type="button"]:hover {
            background-color: #edf1f5;
            color: white;
        }
        
        table {
            width: 100%;
            border: 1px solid;
        }
        
        th,
        td {
            padding: 10px 15px;
        }
    </style>