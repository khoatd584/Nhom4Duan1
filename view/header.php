<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/shop.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body>

    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    ?>
        <div class="account">
            <a href="#">Help</a>
            <a href="#">Hi, <?= $user ?></a>
            <a href="#"><ion-icon style="font-size: 17px;" name="person-outline"></ion-icon></a>
            <div class="dropdown-menu">
                <a class="dropdown-item-active" href="">Account</a>
                <?php if ($role == 1) { ?>
                    <a class="dropdown-item" href="./Admin/index.php">Admin</a>
                <?php } ?>
                <a class="dropdown-item" href="./index.php?act=mybill">Order</a>
                <a class="dropdown-item" href="./index.php?act=thoat">Log Out</a>
            </div>
        </div>
    <?php
    } else {

    ?>
        <div class="account">
            <a href="#">Help</a>
            <a href="./index.php?act=dangky">Join Us</a>
            <a href="./index.php?act=dangnhap">Sign In</a>
        </div>
    <?php } ?>
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./IMG/logo.png" alt=""></a>
        </div>
        <ul class="menu">
            <li class="menu_item">
                <a href="#" class="menu_link">Men</a>
                <div class="menu_child">
                    <div class="menu_child-item">
                        <h3>New & Featured</h3>
                        <ul class="menu_child-list">
                            <li>New Releases</li>
                            <li>SNKRS Launch Calendar</li>
                            <li>Member Accsess</li>
                            <li>Air Force 1</li>
                            <li>Basic Essentials</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Shoes</h3>
                        <ul class="menu_child-list">
                            <li>Newsest Sneakers</li>
                            <li>All Shoes</li>
                            <li>Lifestyle</li>
                            <li>Running</li>
                            <li>Jordan</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Clothing</h3>
                        <ul class="menu_child-list">
                            <li>All Clothing</li>
                            <li>Tops and T-shirts</li>
                            <li>Jerseys and Kits</li>
                            <li>Hoodies and Sweatshirts</li>
                            <li>Jackets and Gilets</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Shop By Sport</h3>
                        <ul class="menu_child-list">
                            <li>Running</li>
                            <li>Football</li>
                            <li>Basketball</li>
                            <li>Gym and Training</li>
                            <li>Yoga</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Icon</h3>
                        <ul class="menu_child-list">
                            <li>Air Force 1</li>
                            <li>Pegasus</li>
                            <li>Blazer</li>
                            <li>Air Jordan 1</li>
                            <li>Air Max</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <a href="#" class="menu_link">Women</a>
                <div class="menu_child">
                    <div class="menu_child-item">
                        <h3>New & Featured</h3>
                        <ul class="menu_child-list">
                            <li>New Releases</li>
                            <li>SNKRS Launch Calendar</li>
                            <li>Member Accsess</li>
                            <li>Air Force 1</li>
                            <li>Basic Essentials</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Shoes</h3>
                        <ul class="menu_child-list">
                            <li>Newsest Sneakers</li>
                            <li>All Shoes</li>
                            <li>Lifestyle</li>
                            <li>Running</li>
                            <li>Jordan</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Clothing</h3>
                        <ul class="menu_child-list">
                            <li>All Clothing</li>
                            <li>Tops and T-shirts</li>
                            <li>Jerseys and Kits</li>
                            <li>Hoodies and Sweatshirts</li>
                            <li>Jackets and Gilets</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Shop By Sport</h3>
                        <ul class="menu_child-list">
                            <li>Running</li>
                            <li>Football</li>
                            <li>Basketball</li>
                            <li>Gym and Training</li>
                            <li>Yoga</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Icon</h3>
                        <ul class="menu_child-list">
                            <li>Air Force 1</li>
                            <li>Pegasus</li>
                            <li>Blazer</li>
                            <li>Air Jordan 1</li>
                            <li>Air Max</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <a href="#" class="menu_link">Kids</a>
                <div class="menu_child">
                    <div class="menu_child-item">
                        <h3>New & Featured</h3>
                        <ul class="menu_child-list">
                            <li>New Releases</li>
                            <li>SNKRS Launch Calendar</li>
                            <li>Member Accsess</li>
                            <li>Air Force 1</li>
                            <li>Basic Essentials</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Boys' Shoes</h3>
                        <ul class="menu_child-list">
                            <li>Older Kids (3-6.5)</li>
                            <li>Younger Kids (10-2.5)</li>
                            <li>Baby & Toddles (1.5-9.5)</li>
                            <li>Running</li>
                            <li>Lifestyle</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Girls' Shoes</h3>
                        <ul class="menu_child-list">
                            <li>Older Kids (3-6.5)</li>
                            <li>Younger Kids (10-2.5)</li>
                            <li>Baby & Toddles (1.5-9.5)</li>
                            <li>Running</li>
                            <li>Lifestyle</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Accessories and Equipment</h3>
                        <ul class="menu_child-list">
                            <li>Balls</li>
                            <li>Backs & BackPacks</li>
                            <li>Socks</li>
                            <li>Hat and Headwear</li>
                        </ul>
                    </div>

                </div>
            </li>
            <li class="menu_item">
                <a href="#" class="menu_link">Customise</a>
                <div class="menu_child">
                    <div class="menu_child-item">
                        <h3>Featured</h3>
                        <ul class="menu_child-list">
                            <li>Nike By You New Releases</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Nike By You</h3>
                        <ul class="menu_child-list">
                            <li>Men</li>
                            <li>Women</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>By Sport</h3>
                        <ul class="menu_child-list">
                            <li>Lifestyle</li>
                            <li>Running</li>
                            <li>Football</li>
                            <li>Basketball</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Icon</h3>
                        <ul class="menu_child-list">
                            <li>Air Force 1</li>
                            <li>Air Max</li>
                            <li>Free</li>
                            <li>Flyknit</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <a href="#" class="menu_link">Sale</a>
                <div class="menu_child">
                    <div class="menu_child-item">
                        <h3>Featured</h3>
                        <ul class="menu_child-list">
                            <li>Shop All Sale</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Men's Sale</h3>
                        <ul class="menu_child-list">
                            <li>Shoes</li>
                            <li>Clothing</li>
                            <li>Accessories and Equipment</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Women's Sale</h3>
                        <ul class="menu_child-list">
                            <li>Shoes</li>
                            <li>Clothing</li>
                            <li>Accessories and Equipment</li>
                        </ul>
                    </div>
                    <div class="menu_child-item">
                        <h3>Kid's Sale</h3>
                        <ul class="menu_child-list">
                            <li>Shoes</li>
                            <li>Clothing</li>
                            <li>Accessories and Equipment</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <a href="#" class="menu_link">SNKRS</a>
            </li>
        </ul>
        <div class="search">


            <form action="./index.php?act=shop" method="POST" class="search_box">
                <input type="text" class="search_input" name="kyw" placeholder="Search...">
                <button class="search_btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </form>


            <div class="">
                <a href="./index.php?act=viewcart">
                    <ion-icon name="bag-outline"></ion-icon>
                </a>
            </div>
        </div>
    </header>