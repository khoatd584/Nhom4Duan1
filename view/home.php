<main>
        <section class="banner">
            <img src="./IMG/banner.jpg" alt="Nike">
            <div class="infor_banner">
                <p>Nike Pegasus Turbo Next Nature</p>
                <h1>RUNNING TO THE FUTURE.</h1>
                <p>Made from at least 50% recycled content by weight. Power your pursuit of progress in the Pegasus Turbo Next Nature</p>
                <a href="./index.php?act=shop"><button>Shop</button></a>
                <button>Watch <span><ion-icon name="play"></ion-icon></span></button>
            </div>
        </section>
        <h2>Featured</h2>
        <section>
            <div class="featured">
                <div class="featured_left">
                    <img src="./IMG/featured_1.webp" alt="">
                    <div class="infor_featured">
                        <h3>Nike (M): Make For Everything You Are</h3>
                        <a href="./index.php?act=shop"><button>Shop</button></a>
                    </div>
                </div>
                <div class="featured_right">
                    <img src="./IMG/featured_2.webp" alt="">
                    <div class="infor_featured">
                        <h3>Supported, But Still You</h3>
                        <a href="./index.php?act=shop"><button>Shop Alate</button></a>
                    </div>
                </div>
            </div>
        </section>
        <h2>Newest Collection</h2>
        <section class="shop">
            <?php 
            foreach ($dstop10 as $sp) {
				extract($sp);
				$linksp = "./index.php?act=sanphamct&idsp=".$id;
				$img = $img_path.$img;
                $formatPrice = number_format($price, 0,  ',', ',');
                echo '
            <div class="product">
                <div class="product_img">
                    <img src="'.$img.'" alt="">
                </div>
                <div class="product_name">
                    <h4>'.$name.'</h4>
                </div>
                <div class="product_price">
                    <span>'.$formatPrice.'<sup>đ</sup></span>
                </div>
            </div>';
        }
        ?>
        </section>
        <h2>Don't Miss</h2>
        <section>
            <div class="featured">
                <div class="featured_left">
                    <img src="./IMG/dontmiss_4.webp" alt="">
                    <div class="infor_featured">
                        <h3>Swoosh Fiber</h3>
                        <a href="./index.php?act=shop"><button>Shop</button></a>
                    </div>
                </div>
                <div class="featured_right">
                    <img src="./IMG/dontmiss_3.webp" alt="">
                    <div class="infor_featured">
                        <h3>Nike Yoga: Go Beyond The Mat</h3>
                        <a href="./index.php?act=shop"><button>Shop</button></a>
                    </div>
                </div>
            </div>
        </section>
        <h2>Just In</h2>
        <section>
            <div class="just_in">
                <img src="./IMG/justin_1.webp" alt="">
            </div>
            <div class="anniversary">
                <p>Nike Air Max FlyKnit Racer</p>
                <h1>10TH ANNIVERSARY EDITION</h1>
                <P>This is what happen when two icons collide. The Flyknit Racer's sock-like upper
                    <ion-icon name="remove-outline"></ion-icon> rooted in performent
                    <ion-icon name="remove-outline"></ion-icon> meets the modern Max Air unit.</P>
                <a href="./index.php?act=shop"><button>Shop</button></a>
            </div>
        </section>
    </main>
    <script>
       // Slick slider
$(document).ready(function() {
    $('.shop').slick({

        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        prevArrow: `<button type='button' class='slick-prev arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next arrow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`
    });
});
// End Slider
    </script>