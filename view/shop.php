
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
        <div class="shop">
            <div class="list_sort">
                <ul>
                    <!-- <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Jordan</a></li>
                    <li><a href="#">Running</a></li>
                    <li><a href="#">Basketball</a></li>
                    <li><a href="#">Football</a></li>
                    <li><a href="#">Training & Gym</a></li>
                    <li><a href="#">Skateboarding</a></li>
                    <li><a href="#">Golf</a></li>
                    <li><a href="#">Tennis</a></li>
                    <li><a href="#">Athletics</a></li>
                    <li><a href="#">Walking</a></li> -->
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
                    
                <div class="product">
                    
                </div>
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