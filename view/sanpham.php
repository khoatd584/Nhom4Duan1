
<main>
        <!-- <div class="sort">
            <button>
                <div class="sort_name">
                    Hide Filter
                </div>
                <div class="sort_icon">
                    <ion-icon name="options-outline"></ion-icon>
                </div>
            </button>
            <button>
                <div class="sort_name">
                    Sort By
                </div>
                <div class="sort_icon">
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
            </button>
        </div> -->
        <h1><?=$tendm?></h1>
        <div class="shop">
            <div class="list_sort">
                <ul>
                <?php
				foreach ($dsdm as $dm) {
					extract($dm);
					$linkdm = "./index.php?act=sanpham&iddm=".$id;
					echo '<li><a href="'.$linkdm.'">
						'.$name.'
					</a></li>';
				}
				?>
                </ul>
            </div>
            <div class="products">
                    
                
                <?php
			foreach ($spnew as $sp) {
				extract($sp);
				$linksp = "./index.php?act=sanphamct&idsp=".$id;
				$img = $img_path.$img;
				echo '<a href="'.$linksp.'"><div class="product_img">
                <img src="'.$img.'" alt="">
            </div>
            <div class="product_name">
                <h4>'.$name.'</h4>
            </div>
            <div class="product_price">
                <span>'.$price.'<sup>đ</sup></span>
            </div></a>';
			}
			?>
            </div>
        </div>
    </main>