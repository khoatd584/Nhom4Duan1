<<<<<<< HEAD
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
            <input type="hidden" name="mota" value="' . $mota . '">
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
    }

    form {
        font-size: 1.2rem;
        margin-top: 35px;
    }

    legend {
        padding: 20px 0;
    }

    .sizes {
        position: absolute;
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
        bottom: -50%;
        transform: translateX(40%);
    }

    input[type=submit]:hover {
        background-color: #7e7e7e;
        color: #fff;
    }

    input[type=radio] {
        display: none;
    }

    label {
        cursor: pointer;
        position: relative;
        color: #111111;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        padding: 10px 40px;
        font-size: 17px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input[type=radio]:checked+label {
        border: 1px solid #111111;
        color: black;
    }
</style>
=======
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
}

form {
    font-size: 1.2rem;
    margin-top: 35px;
}

legend {
    padding: 20px 0;
}

.sizes {
    position: absolute;
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
    bottom: -50%;
    transform: translateX(40%);
}

input[type=submit]:hover {
    background-color: #7e7e7e;
    color: #fff;
}

input[type=radio] {
    display: none;
}

label {
    cursor: pointer;
    position: relative;
    color: #111111;
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    padding: 10px 40px;
    font-size: 17px;
    display: flex;
    justify-content: center;
    align-items: center;
}

input[type=radio]:checked+label {
    border: 1px solid #111111;
    color: black;
}
</style>
<main>
            <?php
            
					extract($onesp);
					$img = $img_path.$img;
                    echo '
        <div class="infor_left">
            <img src="'.$img.'" alt="">
        </div>
        <div class="infor_right">
					<h1>'.$name.'</h1>
                    <span>'.$price.'<sup>đ</sup></span>
                    <p>'.$mota.'</p>';
					?>
            <form action="" method="post">
                <legend>Select Size</legend>
                <div class="sizes">
                    <input type="radio" name="size" id="EU 40">
                    <label for="EU 40">EU 40</label>

                    <input type="radio" name="size" id="EU 40.5">
                    <label for="EU 40.5">EU 40.5</label>

                    <input type="radio" name="size" id="EU 41">
                    <label for="EU 41">EU 41</label>

                    <input type="radio" name="size" id="EU 42">
                    <label for="EU 42">EU 42</label>

                    <input type="radio" name="size" id="EU 43">
                    <label for="EU 43">EU 43</label>

                    <input type="radio" name="size" id="EU 44">
                    <label for="EU 44">EU 44</label>

                    <input type="radio" name="size" id="EU 44.5">
                    <label for="EU 44.5">EU 44.5</label>

                    <input type="radio" name="size" id="EU 45">
                    <label for="EU 45">EU 45</label>

                    <input type="radio" name="size" id="EU 45.5">
                    <label for="EU 45.5">EU 45.5</label>

                    <input type="radio" name="size" id="EU 46">
                    <label for="EU 46">EU 46</label>

                    <input type="submit" name="" value="Add to Cart">

                </div>
            </form>
        </div>
    </main>
>>>>>>> 8fe40c639ea7b4308574a7fda0aa91b7ee741cb8
