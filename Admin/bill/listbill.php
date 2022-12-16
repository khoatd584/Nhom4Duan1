<style>
    .container-fluid {
        margin: 10px;
    }

    input[type=button] {
        margin-top: 10px;
        width: 15%;
        background-color: #54c45e;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    tbody{
        height: 768px;
    }
</style>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Category</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Address</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Quanlity</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Date/Time</th>
                                    <th class="border-top-0">Total</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $countsp = loadall_cart_count($bill['id']);
                                    $ttdh = get_ttdh($bill_status);
                                    $formatPrice = number_format($bill['total'], 0,  ',', ',');
                                    $xoatk = "./index.php?act=xoatk&id=" . $id;
                                    echo '<tr>
                                            <td>NIKE' . $bill['id'] . '</td>
                                            <td>' . $bill['bill_name'] . '</td>
                                            <td>' . $bill['bill_address'] . '</td>
                                            <td>' . $bill['bill_email'] . '</td>
                                            <td>' . $bill['bill_tel'] . '</td>
                                            <td>' . $countsp . '</td>
                                            <td>' . $ttdh . '</td>
                                            <td>' . $bill['ngaydathang'] . '</td>
                                            <td>' . $formatPrice . '</td>
                                            <td>
                                                <a href="' . $xoatk . '"><input type="button" value="Delete"></a>
                                            </td>
                                        </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>