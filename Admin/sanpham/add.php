<style>
    .form-popup {
            display: block;
            position: fixed;
            top: 50%;
            left: 69%;
            transform: translate(-50%, -50%);
            z-index: 9;
            overflow: auto;
        }     
        
        .form {
            width: 75%;
            padding: 32px 24px;
            text-align: left;
            background: #fff;
            border-radius: 2px;
            margin: 24px;
            align-self: center;
            border: 0.5px solid #1dbfaf;
        }
        
        input[type=text],
        textarea,
        select {
            width: 100%;
            padding: 15px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type=file] {
            width: 100%;
            padding: 15px 20px;
            margin: 4px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type=submit],
        input[type=reset],
        input[type=button] {
            width: 50%;
            background-color: #54c45e;
            color: white;
            padding: 15px 10px;
            margin: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover,
        input[type=reset]:hover,
        input[type=button]:hover {
            background-color: #272d40;
            color: #54c45e;
        }
        
        
        .action {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        form {
            --columns: 2;
            --gap: 20px;
            display: grid;
            grid-template-columns: repeat(var(--columns), minmax(0, 1fr));
            grid-gap: var(--gap);
        }
        
        .control {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
</style>
<div class="row">
        
            <div class="form-popup" id="myForm">

                <form action="./index.php?act=addsp" method="POST" class="form" enctype="multipart/form-data">

                    <div class="left">
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" disabled>

                        <label for="giasp">Price</label>
                        <input type="text" id="giasp" name="giasp">


                        <label for="id_loai">Type</label>
                            <select name="iddm" id="">
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                    </div>

                    <div class="right">

                        <label for="tensp">Name</label>
                        <input type="text" id="tensp" name="tensp">

                        <label for="hinh">Image</label>
                        <input type="file" id="hinh" name="hinh">

                        <label for="mota">Describe</label>
                        <textarea id="mota" name="mota" cols="30" rows="1"></textarea>
                    </div>

                    <div class="">
                        <a href="./index.php?act=listsp"><input type="button" value="LIST"></a>
                    </div>

                    <div class="action">
                        <input type="reset" value="RESET">
                        <input type="submit" name="themmoi" value="ADD">         
                    </div>

                </form>
            </div>
        </div>
    </div>