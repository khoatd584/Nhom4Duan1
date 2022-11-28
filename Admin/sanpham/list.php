<div class="container-fluid">
<div class="btn">
                <a href="./index.php?act=addsp"><input onclick="openForm()" class="open-button" type="button" value="Add"></a>
            </div>
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
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Image</th>
                                            <!-- <th class="border-top-0">Describe</th> -->
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'";
                    } else {
                        $hinh = "không có hình";
                    }
                    echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $price . '</td>
                            <td>' . $hinh . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
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