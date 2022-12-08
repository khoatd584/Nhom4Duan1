<style>
    .container-fluid{
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
            <div class="btn">
                <a href="./index.php?act=adddm"><input class="open-button" type="button" value="ADD"></a>
            </div>
            
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
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            $suadm = "./index.php?act=suadm&id=".$id;
                                            $xoadm = "./index.php?act=xoadm&id=".$id;
                                            echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>
                                                <a href="'.$suadm.'"><input type="button" value="Edit"></a> 
                                                <a href="'.$xoadm.'"><input type="button" value="Delete"></a>
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