<?php
function _s_nav_sub_category($param = array()) {

    $img    = $param['img'];
    $title  = $param['title'];
    $items  = $param['items'];
    ?>
    <div class="category-block">
        <img src="<?php echo $img; ?>" />
        <div class="l">
            <a href="#link"><?php echo $title; ?></a>
            <ul>
                <?php foreach ($items as $item) { ?>
                    <li><a href="#link"><?php echo $item; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php
}

function _s_nav_sub() {
    ?>
    <div class="nav-sub">
        <div>
            <h2>Shop by Size</h2>
            <div class="r">
                <a href="#link">
                    <div class="size-block first">
                        <img src="/images/s/shop-by-size-1.jpg" />
                        <div class="t">
                            <div>
                                <h3>Preschoola</h3>
                                <p>(1-5yrs)</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#link">
                    <div class="size-block">
                        <img src="/images/s/shop-by-size-2.jpg" />
                        <div class="t">
                            <div>
                                <h3>Grade Schoola</h3>
                                <p>(6-12yrs)</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#link">
                    <div class="size-block">
                        <img src="/images/s/shop-by-size-1.jpg" />
                        <div class="t">
                            <div>
                                <h3>High Schoola</h3>
                                <p>(13+yrs)</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div>
            <h2>Shop by Category</h2>
            <div class="r">
                <?php
                _s_nav_sub_category(array(
                    'img'   => '/images/s/shop-by-category-1.jpg',
                    'title' => 'Dresses',
                    'items' => array('Sundresses', 'Rompers', 'All Dresses')
                ));
                _s_nav_sub_category(array(
                    'img'   => '/images/s/shop-by-category-4.jpg',
                    'title' => 'Tops',
                    'items' => array('Sweaters', 'Blouses', 'T-shirts', 'Tanks', 'All Tops')
                ));
                ?>
            </div>
            <div class="r">
                <?php
                _s_nav_sub_category(array(
                    'img'   => '/images/s/shop-by-category-2.jpg',
                    'title' => 'Bottoms',
                    'items' => array('Shorts', 'Skirts', 'Jeans', 'Pants', 'All Bottoms')
                ));
                _s_nav_sub_category(array(
                    'img'   => '/images/s/shop-by-category-5.jpg',
                    'title' => 'Footwear',
                    'items' => array('Sneakers', 'Sandals', 'Boots', 'All Footwear')
                ));
                ?>
            </div>
            <div class="r">
                <?php
                _s_nav_sub_category(array(
                    'img'   => '/images/s/shop-by-category-3.jpg',
                    'title' => 'Accessories',
                    'items' => array('Gloves', 'Scarves', 'Tights', 'All Accessories')
                ));
                _s_nav_sub_category(array(
                    'img'   => '/images/s/shop-by-category-6.jpg',
                    'title' => 'Outerwear',
                    'items' => array('Jackets', 'Coats', 'Sweatshirts', 'All Outerwear')
                ));
                ?>
            </div>
        </div>
    </div>
<?php
}

/**
 *
 */
function s_header($param = array()) {

    $show_fund_cart = (isset($param['show-fund-cart'])) ? $param['show-fund-cart'] : false;
?>
    <header>
        <div class="img-block">
            <!-- Intentionally left empty. -->
        </div>
        <?php echo $param['pre-other']; ?>
        <?php if (isset($param['img-text'])) { ?>
            <div class="t-block">
                <div>
                    <div class="s-container">
                        <?php echo $param['img-text']; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="pos-top layer-one">
            <div class="s-container">
                <p class="msg">Schoola turns adorable outgrown clothes into money for your child&rsquo;s school programs. <a href="#">HOW SCHOOLA WORKS</a></p>
                <p class="msg">Invite friends to help our schools and get $15 for you, $15 for them! <a href="#">MORE</a></p>
                <p class="msg">App-y Day! Our app is now available for iPhone and iPad. Exclusive offers and Schoola in your pocket! <a href="#">DOWNLOAD</a></p>
            </div>
        </div>
        <div class="pos-top layer-two">
            <div class="s-container">
                <ul class="menu">
                    <li>
                        <a href="#">Girls <i class="fa fa-caret-down"></i></a>
                        <?php _s_nav_sub(); ?>
                    </li>
                    <li>
                        <a href="#">Boys <i class="fa fa-caret-down"></i></a>
                        <?php _s_nav_sub(); ?>
                    </li>
                    <li>
                        <a href="#">Collections <i class="fa fa-caret-down"></i></a>
                        <div class="nav-sub-collection">
                            <ul>
                                <li><a href="#"><img src="/images/s/under5menu.jpg" /></a></li>
                                <li><a href="#"><img src="/images/s/sensationalsummermenu.jpg" /></a></li>
                                <li><a href="#"><img src="/images/s/newwithtagsmenu.jpg" /></a></li>
                                <li><a href="#"><img src="/images/s/itemswelovemenu.jpg" /></a></li>
                                <li><a href="#"><img src="/images/s/donate-clothes.jpg" /></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Shea Knight</a>
                        <div class="nav-sub-account">
                            <ul>
                                <li><a href="#">Your Settings</a></li>
                                <li><a href="#">Sign Out</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--
                    <li class="no-sub">
                        <a href="#">Join / Sign in</a>
                    </li>
                    -->
                </ul>
                <div class="search-box">
                    <a class="search-icon" href="#"></a>
                    <form>
                        <input type="text" placeholder="Search" />
                    </form>
                </div>
            </div>
        </div>
        <div class="pos-top layer-three">
            <div class="s-container">
                <!-- Add `.solo` class when we don't show the regular cart. -->
                <?php if ($show_fund_cart) { ?>
                    <a class="fund-cart" href="#">8</a>
                <?php } ?>
                <?php persistent_cart(); ?>
            </div>
        </div>
        <div class="pos-top" style="display: none;">
            <div class="account-menu">
                <div class="s-container">
                    <!-- Commented out for preview purposes. This `.fund-cart` is still needed. -->
                    <!-- <a class="fund-cart" href="#">1</a> -->

                    <!-- In Uniform, we introduced a persistent cart, which is anchored to the page right side and "floats" upon scroll. The persistent cart replaces this `.cart` to avoid redundancy. The only thing here we need to take care of is keeping this cart space so it doesn't mess up the location of `.account-menu-list`. -->
                    <a class="cart" href="#"><!-- This `.cart` is essentially no longer used. --></a>

                    <?php persistent_cart(); ?>

                    <ul class="account-menu-list">
                        <li>
                            <a class="username" href="#">
                                <!-- Remove `.long-name` for a "short" name. -->
                                <span class="long-name">Pichaironnarongsongkram...<i class="ending"><!-- Gradient "ending". --></i></span> <i class="fa fa-caret-down"></i></a>

                            <div class="sub">
                                <div class="sub-username">
                                    <ul>
                                        <li>
                                            <a href="#">Your Settings</a>
                                        </li>
                                        <li>
                                            <a href="#">Sign Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="referral" href="#">Invite friends! <span class="magenta">$15</span> for you, <span class="magenta">$15</span> for them! <i class="fa fa-caret-down"></i></a>
                            <div class="sub">
                                <div class="sub-referral">
                                    <div class="t-box">
                                        <h2>$15 for You. $15 for your Friend. 40% to Schools.</h2>
                                        <p>Invite a friend and after their first purchase, each of you will receive $15 credits!</p>
                                        <p>No limit to the number of credits you can receive, so get to sharing! More details <a class="primary" href="#">here</a>.</p>
                                    </div>
                                    <div class="nav-link-block">
                                        <p>Share via email</p>
                                        <div class="input-w">
                                            <input type="text" placeholder="Add email addresses...">
                                            <a class="btn btn-primary" href="#">Send</a>
                                        </div>
                                    </div>
                                    <div class="nav-social-block">
                                        <p>Share on social networks</p>
                                        <div>
                                            <a class="btn btn-facebook" href="#">Share with <strong>Facebook</strong></a> <a class="btn btn-twitter" href="#">Share with <strong>Twitter</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="app-y" href="#link">
                                <img src="/images/s/icon-appy.png" /> Get <span class="magenta strong">APP-Y!</span> <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="sub">
                                <div class="sub-appy">
                                    <p>Shopping&rsquo;s a snap with our new app.<br /><span class="magenta">40% OFF</span> your first order, plus<br />app-exclusive discounts.</p>
                                    <a href="#link"><img src="/images/s/app-store-magenta.png" alt="Available on the App Store" /></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pos-top logo">
            <div class="s-container">
                <div class="logo-container" itemscope itemtype="http://schema.org/Organization">
                    <a href="#" itemprop="url"><img class="logo" src="/images/s/stitch-logo.png" alt="Schoola Stitch
                        logo" itemprop="logo" /></a>
                </div>
            </div>
        </div>
        <?php echo $param['other']; ?>
    </header>
<?php
}
?>