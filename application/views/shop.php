<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo site_url(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>shopIndex</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="header">
        <div id="top">
                 <div class="wrapper">
                 <a href="#" id="login">LOGIN</a>
                 <div id="shop_cart"><a href="#">Cart: <span id="c_total">$ 0.0</span>(<span id="c_sum">0</span>   items ) </a>
                 </div>
                 <div id="h_title">
                     <a href="#">NEW FASHIONS</a>
                 </div>
                 </div>
        </div>
        <ul id="nav" class="wrapper">
            <li class="active"><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;" data-cate_id = "1">男士</a>
                <ul class="n_sub_menu">
                    <li><h5 class="n_sub_menu_header">SHOP</h5>
                        <div class="n_last_menu"><a href="">New Arrivals</a></div>
                        <div class="n_last_menu"><a href="">Men</a></div>
                        <div class="n_last_menu"><a href="">Women</a></div>
                        <div class="n_last_menu"><a href="">Accessories</a></div>
                        <div class="n_last_menu"><a href="">Kids</a></div>
                        <div class="n_last_menu"><a href="">Brands</a></div>
                    </li>
                    <li><h5 class="n_sub_menu_header">HELP</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li><h5 class="n_sub_menu_header">PRODUCTS</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li>
                        <h5 class="n_sub_menu_header">MY COMPANY</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li>
                        <h5 class="n_sub_menu_header">POPULAR</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:;" data-cate_id="2">女士</a>
                <ul class="n_sub_menu">
                    <li><h5 class="n_sub_menu_header">SHOP</h5>
                        <div class="n_last_menu"><a href="">New Arrivals</a></div>
                        <div class="n_last_menu"><a href="">Men</a></div>
                        <div class="n_last_menu"><a href="">Women</a></div>
                        <div class="n_last_menu"><a href="">Accessories</a></div>
                        <div class="n_last_menu"><a href="">Kids</a></div>
                        <div class="n_last_menu"><a href="">Brands</a></div>
                    </li>
                    <li><h5 class="n_sub_menu_header">HELP</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li><h5 class="n_sub_menu_header">PRODUCTS</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li>
                        <h5 class="n_sub_menu_header">MY COMPANY</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li>
                        <h5 class="n_sub_menu_header">POPULAR</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                </ul></li>
            <li><a href="javascript:;" data-tag_id ="1">潮人推荐</a></li>
            <li><a href="javascript:;">博客</a></li>
            <li><a href="javascript:;">关于我们</a>
                <ul class="n_sub_menu">
                    <li><h5 class="n_sub_menu_header">SHOP</h5>
                        <div class="n_last_menu"><a href="">New Arrivals</a></div>
                        <div class="n_last_menu"><a href="">Men</a></div>
                        <div class="n_last_menu"><a href="">Women</a></div>
                        <div class="n_last_menu"><a href="">Accessories</a></div>
                        <div class="n_last_menu"><a href="">Kids</a></div>
                        <div class="n_last_menu"><a href="">Brands</a></div>
                    </li>
                    <li><h5 class="n_sub_menu_header">HELP</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li><h5 class="n_sub_menu_header">PRODUCTS</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li>
                        <h5 class="n_sub_menu_header">MY COMPANY</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                    <li>
                        <h5 class="n_sub_menu_header">POPULAR</h5>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                        <div class="n_last_menu"><a href=""></a></div>
                    </li>
                </ul></li>
        </ul>
        <div id="h_content">
                <div class="wrapper">
                    <h2>FASHION AND CREATIVITY</h2>
                    <p>
                        Sed dapibus est a lorem dictum, id dignissim lacus fermentum. Nulla ut nibh in libero maximus pretium Nunc vulputate vel tellus ac elementum. Duis nec tincidunt dolor, ac dictum eros.
                    </p>
                </div>
        </div>
    </div>
    <div id="banner">
       <div class="wrapper">
           <div>
               <a href=""><div class="b_sub"><h5>Fashion</h5><div>dignissim</div></div></a>
           </div>
           <div>
               <a href=""><div class="b_sub"><h5>Beauty</h5><div>fermentum</div></div></a>
           </div>
           <div>
               <a href=""><div class="b_sub"><h5>Creativity</h5><div>vulputate</div></div></a>
           </div>
       </div>
   </div>
    <div id="content">
        <div class="wrapper">
            <ul id="c_header">
                <li class="c_active">best seller</li>
                <li>popular</li>
                <li>new Arrivals</li>
            </ul>
            <ul id="c_content">
            </ul>
            <div id = "c_loading"></div>
            <div id="c_loadMore">加载更多</div>
        </div>
    </div>
    <div id="contact">
        <div class="wrapper">
            <div class="f_left">
                <ul class="f_l_h">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Combos</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Trendy</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Top Seller</a></li>
                    <li><a href="#">College</a></li>
                    <li><a href="#">New Models</a></li>
                    <li><a href="#">Party</a></li>
                    <li><a href="#">Combos</a></li>
                    <li><a href="#">Dress</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="#">Kurtas & kurtis</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="f_l_b">
                    <li class="f_l_b_d">
                        follow us
                    </li>
                    <li>
                        <ul class="f_l_b_c">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="f_right">
                <ul class="f_r">
                    <li class="f_r_t">
                        <span><input type="text" name="name" placeholder="Name.."></span>
                        <span><input type="text" name="email" placeholder="Email.."></span>
                    </li>
                    <li class="f_r_c">
                        <textarea name="message" placeholder="Message.."></textarea>
                    </li>
                    <li class="f_r_b">
                        <button>Submit</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include"login.php" ?>
    <script src="assets/js/artTemplate.js"></script>
    <script type="text/html" id="product">
        <li class="product_item">
            <img src="{{img_src}}" alt="">
            <div class="c_footer">
                <div class="c_price">
                    <h5>{{prod_name}}</h5>
                    <p>${{prod_price}}</p>
                    <div><input type="text" value="{{count}}"/></div>
                    <button class="product_add">add</button>
                </div>
            </div>
        </li>
    </script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/login.js"></script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>