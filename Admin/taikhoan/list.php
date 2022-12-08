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
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listtaikhoan as $taikhoan) {
                                    extract($taikhoan);
                                    $xoatk = "./index.php?act=xoatk&id=" . $id;
                                    echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $user . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $tel . '</td>
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