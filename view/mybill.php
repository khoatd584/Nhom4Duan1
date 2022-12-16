<main>
        <div class="order">
            <h1>Your order is complete!</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Order Date</th>
                    <th>Total</th>
                </tr>
                <?php
                if(is_array($listbill)) {
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $countsp = loadall_cart_count($bill['id']);
                        $formatPrice = number_format($bill['total'], 0,  ',', ',');
                        echo '<tr>
                        <td>NIKE'.$bill['id'].'</td>
                        <td>'.$bill['bill_name'].'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td>'.$formatPrice.'</td>
                        <td>'.$ttdh.'</td>
                        <td></td>
                        <td></td>
                    </tr>';
                    }
                }
                ?>
            </table>
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
        
        ion-icon {
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
        
        input[type="button"]:hover {
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