
<main>
    <?php

    extract($onesp);
    $img = $img_path . $img;
    $formatPrice = number_format($price, 0,  ',', ',');
    echo '
    <div class="infor_left">
        <img src="' . $img . '" alt="">
    </div>
    <div class="infor_right">
                <h1>' . $name . '</h1>
                <span>' . $formatPrice . '<sup>đ</sup></span>
                <p>' . $mota . '</p>
        <form action="./index.php?act=addtocart" method="post">
            
            <div class="sizes">
            <input type="hidden" name="id" value="' . $id . '">
            <input type="hidden" name="name" value="' . $name . '">
            <input type="hidden" name="img" value="' . $img . '">
            <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" value="Add to Cart">
                

            </div>
        </form>
    </div>';
    ?>
</main>
<style>
    main {
        margin-top: 5rem;
        display: flex;
        justify-content: space-around;
    }

    .infor_left {
        width: 50%;
    }

    .infor_right {
        padding: 0 25px;
        width: 40%;
        position: relative;
        font-size: 1rem;
    }
    
    .infor_right span {
        font-size: 24px;
    }
    
    form {
        font-size: 1.2rem;
        margin-top: 35px;
    }

    legend {
        padding: 20px 0;
    }

    .sizes {
    
        --columns: 3;
        --gap: 10px;
        display: grid;
        grid-template-columns: repeat(var(--columns), minmax(0, 1fr));
        grid-gap: var(--gap);
    }

    input[type=submit] {
        cursor: pointer;
        background-color: #111111;
        color: #fff;
        border: none;
        border-radius: 25px;
        padding: 20px 100px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);        
    }

    input[type=submit]:hover {
        background-color: #7e7e7e;
        color: #fff;
    }

    input[type=radio] {
        display: none;
    }

    
</style>

