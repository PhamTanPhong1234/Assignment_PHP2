<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Product - Rakia Studio</title>
    <link rel="shortcut icon" type="image/png" href="Asset/Img/rAKIA.png">
    <link rel="stylesheet" href="Asset/themify-icons/themify-icons.css">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }
        #body {
            width: 100%;
            height: fit-content;
        }

        #body #body-wrap {
            width: 100%;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;

        }

        #body .slider {
            float: right;
            width: 80%;
            /* background-color:pink; */
        }

        .slider .img-box {
            width: 95%;
            height: 270px;
            background-color: rebeccapurple;
            margin-left: auto;
            margin-right: auto;
            /* overflow: hidden; */


        }


        .img-box .image1 {
            width: 100%;
            height: 100%;
            background: url('https://www.proshop.no/Images/Logitech-Topbanner.jpg') center center no-repeat;
            background-size: 100%;
        }

        .article {
            width: 20%;
            /* background-color: aqua; */
            float: left;
        }

        .article .article-box {
            width: 100%;
            background-color: #F6F1F1;
            height: 100%;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.3);
        }

        .article .article-content {
            padding-top: 10px;
            width: 90%;
            margin: auto;
        }

        .article .article-content h4 {
            margin: 15px 0;
        }

        .article .article-content p {
            margin: 15px 0;
            font-size: 15px;
        }

        .article .article-content a,
        #product a {
            color: #3472dd;
            text-decoration: none;
        }

        .article .article-content a:hover,
        #product a:hover {
            text-decoration: underline;
        }


        .article #service,
        .article #brand .choose {
            margin-bottom: 15px;
        }

        .article .article-content #star {
            line-height: 40px;
            cursor: pointer;

        }

        .article hr {
            margin-top: 10px;
            line-height: 50px;
        }

        .article .price {
            width: fit-content;
            padding: 10px 10px;
            margin: 5px 0;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            background-color: #d2cfcf;
        }

        .article .input-box {
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: space-between;
        }

        .article .input-box #price {
            width: 45%;
            height: 30px;
        }

        .article .enter {
            margin-top: 15px;
            width: 100%;
            height: 45px;
            font-size: 17px;
            font-weight: 600;
            border: none;
            background-color: black;
            color: #fff;
            transition: 0.3s;
        }

        .article .enter:hover {
            background: none;
            font-size: 18px;
            color: black;
            border: 3px solid black;
        }

        /* product */
        #product {
            margin-top: 10px;
            width: 100%;
            /* background-color: red; */

            /* overflow: auto; */
        }



        #product .product-box {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        #product .product-box .product-item {
            margin-top: 50px;
            width: calc(25% - 15px);
            transition: 0.2s;
        }

        #product .product-box .product-item:hover {
            transform: translateY(-20px);
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.3);
        }

        /* product item */
        #product .product-content {
            width: 95%;
            margin: auto;
        }

        #product span {
            font-weight: 700;
        }

        #product .big-title {
            line-height: 30px;
            text-align: center;
            width: 100%;
            color: #F0F0f0;
            background-color: #000;

        }

        #product .descrip {
            padding: 5px 12px;
            margin: 10px 0;
            background-color: #F0F0f0;
            border-radius: 5px;

        }

        #product .descrip ul {
            margin-left: 10px;
        }

        #product .descrip li {
            font-size: 10px;
            color: #7e7c7d;
        }

        #product h4 {
            float: left;
            font-weight: 300;
        }

        #product h3 {
            color: #396ff6;
            margin-bottom: 10px;

        }

        #product .tag {
            float: right;
            width: 50px;
            height: 50px;
            border-radius: 5px;
            background-color: #396ff6;
            font-weight: bold;
            color: #fff;
            text-align: center;
            line-height: 50px;
        }


        /* product item */




        /* product */


        /* Body */
        /* footer */

        /* footer */
    </style>
</head>

<body>
    <?php include('Layouts/header.php'); ?>
    <main id="main">
        <div id="body">
            <div id="body-wrap">
                <div class="slider">
                    <div class="img-box">
                        <div class="image1"></div>
                        <div id="product">
                            <h3 class="big-title">KeyBoard</h3>
                            <div class="product-box">

                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/thumbphim-recovered_3a50e384a9744490b675ba8eaf5664de.gif" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>AKKO MonsGeek MG108 </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <h3>2.099.000 VND</h3>

                                    </div>
                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/hinh-1-white_3d772a2c05a140e1818e8e387c420dd3.gif" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span> IKBC CD87HR
                                        </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <h3>2.099.000 VND</h3>
                                    </div>

                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/thumbphim_9e7f596eb320400abe489ac4ba9ecd76.gif" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>AKKO 5075B Plus Naruto</span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <h3>2.099.000 VND</h3>
                                    </div>

                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/kbtre68-1_1080x_ee6240bd27594632b3996bd1913f302b.png" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Vortex PC66 (68 Key)</span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <h3>2.099.000 VND</h3>
                                    </div>

                                </div>

                            </div>
                            <a style="line-height: 70px;float: right;" href="">See more <i class="fa-solid fa-angle-right"></i></a>

                            <h3 class="big-title" style=" margin-top: 100px;">Mouse</h3>
                            <div class="product-box">

                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/g502x-plus-gallery-2-white_69229c9ba5534ad5bfae7d827037a28f.png" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Logitech G502 X Plus </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>799.000 VND</h3>

                                    </div>
                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/2-707b8a10-95ac-4e6d-9e50-2808c2959505__1__15430e9a7a954cd9a4427309477cb0df.png" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Havit MS878
                                        </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>799.000 VND</h3>
                                    </div>

                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/gearvn-chuot-asus-rog-harpe-ace-aim-lap-edition-1_37cafa812da94df3872eb2058056fc31.png" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span> ASUS ROG Harpe Ace Aim </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>799.000 VND</h3>
                                    </div>

                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/chuot-khong-day-gaming-dareu-em901x-pink-01_542ff31224024dd3813ed701f4926555.jpg " style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>DareU EM901X RGB Superligh</span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>799.000 VND</h3>
                                    </div>

                                </div>

                            </div>
                            <a style="line-height: 70px;float: right;" href="">See more <i class="fa-solid fa-angle-right"></i></a>

                            <h3 class="big-title" style=" margin-top: 100px;">Headset</h3>
                            <div class="product-box">

                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/_tai_nghe_khong_day_corsair_hs80_led_rgb_wireless_ca_9011235_ap_0001_2_436fee75cc8d499e9d7619b9efef8acd.jpg" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Corsair HS80 RGB Wireless</span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>2.099.000 VND</h3>

                                    </div>
                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/g735-gallery-1_61c8c9fdd1c6414bbd862ec242cbd238.png" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Logitech G735 Off White
                                        </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>2.099.000 VND</h3>
                                    </div>

                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/gearvn-tai-nghe-logitech-g435-lightspeed-wireless-black-1_d9659ca84d664ca38f9f800184e6ac0a.jpg" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Logitech G435 Lightspeed</span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>2.099.000 VND</h3>
                                    </div>

                                </div>
                                <div class="product-item">
                                    <img src="https://product.hstatic.net/1000026716/product/rz12-03820100-r3a1-3_c0de562db0d640fe840d4e95c84ee0dc.jpg" style="width: 100%;" alt="">
                                    <div class="product-content">
                                        <span>Razer Hammerhead </span>
                                        <div class="descrip">
                                            <ul>
                                                <li>Akko Switch V3</li>
                                                <li>Full Size</li>
                                                <li>Keycap PPT Double Shot</li>
                                                <li>Led RGB </li>
                                            </ul>
                                        </div>
                                        <h4 style="text-decoration: line-through;">2.999.000 VND</h4>
                                        <div class="tag">-23%</div>
                                        <br>
                                        <h3>2.099.000 VND</h3>
                                    </div>

                                </div>

                            </div>
                            <a style="line-height: 70px;float: right;" href="">See more <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <article class="article">
                    <div class="article-box">
                        <div class="article-content">
                            <h4>Delivery Address</h4>
                            <p>Hai Chau District , Da Nang City</p>
                            <a href="">Change the address</a>
                            <hr>
                            <h4>Service</h4>
                            <form id="service" action="">
                                <input class="choose" type="checkbox">&nbspFasting 2H <br>
                                <input class="choose" type="checkbox">&nbspMore Astra <br>
                                <input class="choose" type="checkbox">&nbspDeep Sale <br>
                                <input class="choose" type="checkbox">&nbsp Installment 0%
                            </form>
                            <hr>
                            <h4>Rate</h4>
                            <div id="star" class="star5">
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i>from 5 star</i>
                            </div>
                            <div id="star" class="star4">
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: gray; font-size: 13px;"></i>
                                <i>from 4 star</i>
                            </div>
                            <div id="star" class="star3">
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: orange; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: gray; font-size: 13px;"></i>
                                <i class="fa-solid fa-star" style="color: gray; font-size: 13px;"></i>
                                <i>from 3 star</i>
                            </div>
                            <hr>
                            <h4>Price</h4>
                            <div class="price">Under $500</div>
                            <div class="price">$500 >> $1000</div>
                            <div class="price">From $1000</div>
                            <p>Choose the price</p>
                            <div class="input-box">
                                <input type="number" id="price" class="min-price" min="0"> -
                                <input type="number" id="price" class="max-price" min="0">
                            </div>
                            <button class="enter">Enter</button>
                            <hr>
                            <h4>Category</h4>
                            <form id="brand" action="">
                                <input class="choose" type="checkbox">&nbspMouse<br>
                                <input class="choose" type="checkbox">&nbspKeyboard<br>
                                <input class="choose" type="checkbox">&nbspWebcam <br>
                                <input class="choose" type="checkbox">&nbspCheckpad<br>
                                <input class="choose" type="checkbox">&nbspHeadphone
                            </form>
                            <a style="line-height: 50px;" href="">Show more <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>
    <?php include('Layouts/footer.php'); ?>
</body>

</html>