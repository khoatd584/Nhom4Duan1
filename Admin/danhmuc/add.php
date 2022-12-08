<style>

        .form {
            width: 50rem;
            min-height: 100px;
            padding: 32px 24px;
            text-align: right;
            background: #fff;
            border-radius: 2px;
            margin: 24px;
            align-self: center;
            border: 0.5px solid #1dbfaf;
            position: absolute;
            top: 50%;
            left: 55%;
            transform: translate(-50%,-50%);
        }
        
        .form-group {
            display: flex;
            margin-bottom: 16px;
            flex-direction: column;
        }
        
        .form-label,
        .form-message {
            text-align: left;
        }
        
        .form-label {
            font-weight: 700;
            padding-bottom: 6px;
            line-height: 1rem;
            font-size: 1rem;
        }
        
        .form-control {
            height: 40px;
            padding: 8px 12px;
            border: 1px solid #b3b3b3;
            border-radius: 3px;
            outline: none;
            font-size: 1rem;
        }
        
        .form-control:hover {
            border-color: #1dbfaf;
        }
        
        .form-submit {
            outline: none;
            background-color: #54c45e;
            margin-top: 12px;
            padding: 12px 16px;
            font-weight: 600;
            color: #fff;
            border: none;
            width: 100%;
            font-size: 14px;
            border-radius: 8px;
            cursor: pointer;
        }
        
        .form-submit:hover {
            background-color: #1ac7b6;
        }
        .form_action{
            display: flex;
            justify-content: flex-end;
            flex-direction: row;
        }
        input[type=submit],
        input[type=reset],
        input[type=button]{
            width: 45%;
        }
       
</style>
<div class="row">
            <!-- <div class="row formcontent">
                <form action="./index.php?act=adddm" method="POST">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                    <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="./index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div> -->
                <form action="./index.php?act=adddm" method="POST" class="form" id="form-1">

                    <div class="form-group">
                    <label for="maloai" class="form-label">ID</label>
                        <input id="maloai" name="maloai" type="text" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label for="tenloai" class="form-label">Name</label>
                        <input id="tenloai" name="tenloai" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <a href="./index.php?act=listdm"><input type="button" value="LIST"></a>
                    </div>

                    <div class="form-action">
                        <input type="reset" value="RESET">
                        <input type="submit" name="themmoi" value="ADD">
                    </div>

                </form>
            
        </div>
    </div>