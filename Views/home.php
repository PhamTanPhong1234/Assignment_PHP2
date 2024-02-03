<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Rakia Studio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/png" href="../Img/rAKIA.png">
    <link rel="stylesheet" href="Asset/themify-icons/themify-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }
        #main {
            background-color: #F6F1F1;
        }

        /* header */
        /* @media */
        /* Header */

        /* slider */
        #slider {
            margin-top: 1.8%;
            width: 100%;
            height: 80vh;
            background: url('Asset/Img/20191127190639-shutterstock-431848417-crop.jpeg') top center no-repeat;
            background-size: 100%;
        }


        #title {
            width: 75%;
            margin: auto;
        }

        .title {
            padding-top: 17%;
            color: #fff;
            font-weight: 600;
            width: 500px;
            font-size: 50px;
        }

        .page {
            color: #fff;
            font-weight: 300;
            width: 500px;
            padding-top: 20px;
            padding-bottom: 30px;
            /* font-size: 50px; */
        }

        .hover {
            width: 150px;
            height: 30px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            color: #fff;
            border-radius: 30px;
            background: linear-gradient(90deg, #1495d1, #22cfff, #AFD3E2);
            transition: 0.3s;
        }

        .hover:hover {
            font-size: 15px;
        }

        /* slider */

        /* Body */

        #body {
            margin-top: 50px;
        }

        /* body1 */
        #body1 .body1-title {
            background-clip: text;
            background: linear-gradient(to right, #30CFD0 0%, #5e08c8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            width: 100%;
            font-size: 3em;
            text-align: center;
            margin: 50px 0;
        }

        #body #body1 {
            width: 100%;
        }

        .site {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            padding: 24px 10px;
        }

        .tick {
            width: 100%;
            font-size: 30px;
            font-weight: 500;

        }

        #body1 .site .site1 {
            width: calc(100%/5);
            text-align: center;
            padding-top: 30px;
            border: 2px solid rgb(185, 181, 181);
            border-radius: 5px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .site .site1:hover {
            transform: translateY(-50px);

        }

        .site .site1 h4 {
            margin: 10px 0;
        }

        .site .site1 .detail {
            width: 150px;
            height: 30px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            color: #fff;
            border-radius: 30px;
            background: #22cfff;
            transition: 0.3s;
            margin: 24px 0;
        }

        .site .detail:hover {
            background: none;
            border: 2px black solid;
            color: black;
        }

        .site .site1 p {
            margin-top: 10px;
        }

        /* body1 */
        /* Body2 */
        /* #body2{
    width: 100%;
    background-color: red;
    
} */
        .grid-container {
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            width: 85%;
            display: grid;
            grid-template-columns: 50% 25% calc(25%-10px);
            grid-template-rows: 200px 200px 200px;
            grid-gap: 10px;

        }

        .grid-container .grid-item {
            background-color: #fcfbfb71;
            box-shadow: 2px 2px 11px rgba(0, 0, 0, 0.343);
            border-radius: 4px;
        }

        .item1 {
            grid-column: 1 / span 2;
            grid-row: 1/span 2;
            position: relative;

        }

        .item2 {
            grid-column: 1 / span 1;
            grid-row: 3 / span 2;
            overflow: hidden;
            position: relative;
        }

        .item3 {
            position: relative;
            overflow: hidden;
        }

        .item5 {
            grid-column: 2 / span 1;
            grid-row: 3 / span 2;
            position: relative;
            overflow: hidden;
        }

        .item4 {
            grid-row: 2 / span 3;
            position: relative;
        }

        .grid-container .card {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .grid-container .item1 img {
            margin-top: 10px;
            width: 60%;
            transition: 0.3s;
        }

        .item1:hover img {
            transform: scale(1.1);

        }

        #bestsaler h3 {
            font-family: Poppins;
        }


        #bestsaler .eye,
        #bestsaler .plus {
            cursor: pointer;
        }



        .item1 .push {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            width: auto;
            height: 20px;

        }

        .item1:hover .push {
            display: block;
        }

        .item1 .push a {
            text-decoration: none;
            color: #2F3132;
            height: 30px;
        }

        .item1 .push .eye {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item1 .push .plus {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item1 .push .eye:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item1 .push .plus:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item1 .best {
            position: absolute;
            top: 0px;
            left: 0px;
            color: #ffffff;
            width: 150px;
            height: 50px;
            font-size: 25px;
            font-family: 'Lexend Deca', sans-serif;
            font-weight: 500;
            line-height: 50px;
            padding-left: 40px;
            text-align: left;
            border-bottom-right-radius: 100px;
            border-top-right-radius: 10px;
            background-color: #ce2222;
        }

        .item2 .push {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            width: auto;
            height: 20px;

        }

        .item2:hover .push {
            display: block;
        }

        .item2 .push a {
            text-decoration: none;
            color: #2F3132;
            height: 30px;
        }

        .item2 .push .eye {

            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item2 .push .plus {

            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item2 .push .eye:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item2 .push .plus:hover {
            border-radius: 100px;
            background-color: #fff;
        }


        .item3 .push {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            width: auto;
            height: 20px;

        }

        .item3:hover .push {
            display: block;
        }

        .item3 .push a {
            text-decoration: none;
            color: #2F3132;
            height: 30px;
        }

        .item3 .push .eye {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item3 .push .plus {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item3 .push .eye:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item3 .push .plus:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item4 .push {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            width: auto;
            height: 20px;

        }

        .item4:hover .push {
            display: block;
        }

        .item4 .push a {
            text-decoration: none;
            color: #2F3132;
            height: 30px;
        }

        .item4 .push .eye {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item4 .push .plus {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item4 .push .eye:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item4 .push .plus:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item5 .push {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            width: auto;
            height: 20px;

        }

        .item5:hover .push {
            display: block;
        }

        .item5 .push a {
            text-decoration: none;
            color: #2F3132;
            height: 30px;
        }

        .item5 .push .eye {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item5 .push .plus {
            padding: 5px 10px;
            font-size: 20px;
            font-weight: bolder;
        }

        .item5 .push .eye:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item5 .push .plus:hover {
            border-radius: 100px;
            background-color: #fff;
        }

        .item2 .card {
            position: absolute;
            bottom: 110px;
            transform: scale(0.9);
            transition: 0.3s;
        }

        .item2:hover .card {
            transform: scale(1.0);
        }

        .item2 h3 {
            margin-top: 170px;
        }

        .item3 img {
            margin-top: 100px;
            transition: 0.3s;
        }

        .item3:hover img {
            transform: scale(1.1);
        }

        .item3 h3 {
            margin-top: 50px;
        }

        .item4 .card {
            position: absolute;
            top: 20px;
            transform: scale(0.6);
            transition: 0.3s;
        }

        .item4:hover .card {
            transform: scale(0.8);
        }

        .item4 h3 {
            margin-top: 380px;
        }

        .item5 .card {
            position: absolute;
            bottom: 50px;
            transform: scale(0.9);
            transition: 0.3s;
        }

        .item5:hover .card {
            transform: scale(1.0);
        }

        .item5 h3 {
            margin-top: 170px;
        }

        /* Body2 */

        /* Body2 */

        /* body3 */
        #body3 {
            margin-top: 40px;
            width: 100%;
            background-color: black;
        }

        #body3 .title {
            width: 100%;
            text-align: center;
        }

        #body3 .title p {
            font-size: 15px;
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 100px;
        }

        .flex-box-review {
            width: 80%;
            margin: auto;
            padding-bottom: 10%;
            display: flex;
            justify-content: space-between;

        }

        .flex-box-review .review {
            width: 30%;
        }

        .flex-box-review .review h4 {
            margin: 20px 0;
            text-transform: uppercase;
            color: #fff;
        }

        .flex-box-review .review .mini-page {
            color: #ffffff7c;
            margin-bottom: 10px;
        }

        .flex-box-review .review .avatar .name {
            color: #ffffff;
            font-weight: 600;
        }

        .flex-box-review .avatar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            margin: 5px 0;

        }

        .flex-box-review .avatar .pic1 {
            height: 60px;
            width: 60px;
            background: url('https://gaixinhbikini.com/wp-content/uploads/2023/02/hinh-co-gai-xinh-dep-005.jpg') right center no-repeat;
            background-size: 100%;
        }

        .flex-box-review .avatar .pic2 {
            height: 60px;
            width: 60px;
            background: url('https://678.vn/images/raovat1/p1_679350.jpg') right center no-repeat;
            background-size: 100%;
        }

        .flex-box-review .avatar .pic3 {
            height: 60px;
            width: 60px;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIg9VC258xz63EKCm6MiYQsbUg1vkPKohToQ&usqp=CAU    ') right center no-repeat;
            background-size: 100%;
        }


        .flex-box-review .avatar .name {
            font-weight: 300;
        }

        .flex-box-review .review .date {
            color: #2F3132;
        }

        .flex-box-review .review hr {
            color: #2F3132;
        }

        .flex-box-review .review .img1 {
            width: 100%;
            height: 250px;
            background: url('https://banphimco.com/wp-content/uploads/2021/03/DSC02103.jpg') right center no-repeat;
            background-size: 100%;
            transition: 0.3s;
        }

        .review .img1:hover {
            opacity: 0.8;
        }

        .flex-box-review .review .img2 {
            width: 100%;
            height: 250px;
            background: url('https://phucanhcdn.com/media/lib/22-01-2022/airpodsmaxbvh11.jpg') right center no-repeat;
            background-size: 110%;
            transition: 0.3s;
        }

        .review .img2:hover {
            opacity: 0.8;
        }

        .flex-box-review .review .img3 {
            width: 100%;
            height: 250px;
            background: url('https://product.hstatic.net/200000314529/product/img_2685_09417a3b553d48b5925bbcc8ddd10f29_master.jpg') right center no-repeat;
            background-size: 110%;
            transition: 0.3s;
        }

        .review .img3:hover {
            opacity: 0.8;
        }

        /* body3 */

        /* body4 */
        #body4 {
            width: 100%;
            padding-bottom: 100px;
        }

        #body4 .address {
            width: 90%;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: space-between;
        }

        #body4 .address .text-box {
            width: 25%;
            text-align: center;

        }

        #body4 .address .text-box .infor {
            width: 100%;
            font-size: 20px;
            font-weight: 600;

        }

        #body4 .address .text-box p {
            color: #2F3132;
            margin-top: 15px;
            line-height: 35px;
            font-size: 15px;
        }

        /* body4 */

        /* Body */

        /* footer */

        #footer {
            width: 100%;
            height: 60vh;
            background-color: #adadad;
            text-transform: uppercase;
        }

        #footer .footer-infor {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            font-weight: 500;
            justify-content: space-between;
        }

        #footer .footer-infor .site-box {
            margin-top: 100px;
            width: 25%;
            height: 200px;
        }

        #footer .footer-infor .site-box a {
            font-weight: 600;
            text-decoration: none;
            font-size: 15px;
            color: black;
            line-height: 35px;
        }

        #footer .footer-infor .site-box a:hover {
            text-decoration: underline;

        }

        #footer .footer-icon {
            width: 100%;
            text-align: center;
        }

        #footer .footer-icon .box {
            width: 15%;
            height: 100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        #footer .footer-icon .box i {
            font-size: 25px;
            font-weight: bold;
        }

        #body3 .title {
            padding-top: 5%;
        }

        /* footer */
    </style>
</head>

<body>
    <?php include('Views/Layouts/header.php'); ?>
    <main id="main">
        <div id="slider">
            <div class="slider">
                <div id="title">
                    <p class="title">Wherever you go
                        it’ll inside the World</p>
                    <p class="page">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dol ore magna aliqua. </p>
                    <button class="hover">
                        SEE DETAILS
                    </button>
                </div>
            </div>
        </div>
        <div id="body">
            <div id="body1">
                <h1 class="body1-title">What do we have for you?</h1>
                <div class="site">
                    <div class="site1">
                        <i class="ti-check-box tick"></i>
                        <h4>Easy To Search</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua.</p>
                        <button class="detail">Details</button>
                    </div>
                    <div class="site1">
                        <i class="ti-ticket tick"></i>
                        <h4>Get More Offer</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua.</p>
                        <button class="detail">Details</button>
                    </div>
                    <div class="site1">
                        <i class="ti-bar-chart tick"></i>
                        <h4>Trend Update</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua.</p>
                        <button class="detail">Details</button>
                    </div>
                    <div class="site1">
                        <i class="ti-user tick"></i>
                        <h4>Professional Team</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua.</p>
                        <button class="detail">Details</button>
                    </div>


                </div>
            </div>



            <div id="body3">
                <div class="title">
                    <h4 class="review-title">Our Recent Reviews</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        utlabore et dolore magna aliqua. </p>
                </div>
                <div class="flex-box-review">
                    <div class="review">
                        <div class="img1"></div>
                        <h4>"It's really worth the money"</h4>
                        <p class="mini-page">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt utlabore et dolore magna aliqua.</p>
                        <hr>
                        <div class="avatar">
                            <div class="pic1"></div>
                            <p class="name">UyenThucute22</p>
                            <p class="date">31/8/2023</p>
                        </div>
                        <hr>
                    </div>
                    <div class="review">
                        <div class="img2"></div>
                        <h4>"It's really worth the money"</h4>
                        <p class="mini-page">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod
                            tempor incididunt utlabore et dolore magna aliqua.</p>
                        <hr>
                        <div class="avatar">
                            <div class="pic2"></div>
                            <p class="name">UyenThucute22</p>
                            <p class="date">31/8/2023</p>
                        </div>
                        <hr>
                    </div>
                    <div class="review">
                        <div class="img3"></div>
                        <h4>"It's really worth the money"</h4>
                        <p class="mini-page">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt utlabore et dolore magna aliqua.</p>
                        <hr>
                        <div class="avatar">
                            <div class="pic3"></div>
                            <p class="name">UyenThucute22</p>
                            <p class="date">31/8/2023</p>
                        </div>
                        <hr>
                    </div>

                </div>
            </div>
            <div id="body2">
                <div id="bestsaler">
                    <div class="grid-container">
                        <div class="grid-item item1">
                            <div class="card" style="width: 100%;height: 80%;">
                                <img src="Asset/Img/mx-keys-mini-combo-business-gallery-us-graphite-1.png" alt="">
                            </div>
                            <div style="text-align:center; width: 100%;">
                                <h3>Logitech MX Keys Mini & Logitech MX AnyWhere 3</h3>
                            </div>
                            <div class="push">
                                <a onclick="openPr1()"><i class="ti-eye eye"></i></a>
                                <a><i class="ti-plus plus"></i></a>
                            </div>
                            <div class="best">New</div>

                        </div>
                        <div class="grid-item item2">
                            <div class="card" style="width: 100%;height: 80%;">
                                <img src="Asset/Img/folio-touch-air-gallery-1.png" alt="" style="width: 350px;">

                            </div>
                            <div style="text-align:center;width: 100%;">
                                <h3>Logitech Folio Touch</h3>
                            </div>
                            <div class="push">
                                <a onclick="openPr2()"><i class="ti-eye eye"></i></a>
                                <a><i class="ti-plus plus"></i></a>
                            </div>
                        </div>

                        <div class="grid-item item3">
                            <div style="text-align:center; width: 100%;">
                                <h3>Logitech 4K Brio</h3>
                            </div>
                            <div class="card" style="width: 100%;height: 80%;">
                                <img src="Asset/Img/4k-pro-gallery-1.png" alt="" style="width: 300px;">
                            </div>


                            <div class="push">
                                <a onclick="openPr3()"><i class="ti-eye eye"></i></a>
                                <a><i class="ti-plus plus"></i></a>
                            </div>
                        </div>

                        <div class="grid-item item4">
                            <div class="card" style="width: 100%;height: 80%;">
                                <img src="Asset/Img/zone-vibe-100-gallery-white-1.png" alt="" style="width: 350px;">
                            </div>

                            <div style="text-align:center; width: 100%;">
                                <h3>Logitech Zone Vibe 100</h3>
                            </div>
                            <div class="push">
                                <a onclick="openPr4()"><i class="ti-eye eye"></i></a>
                                <a><i class="ti-plus plus"></i></a>
                            </div>
                        </div>

                        <div class="grid-item item5">
                            <div class="card" style="width: 100%;height: 80%;">
                                <img src="Asset/Img/ggt-1.png" alt="" style="width: 300px;">
                            </div>

                            <div style="text-align:center;width: 100%;">
                                <h3>Logitech Pop Keys</h3>
                            </div>
                            <div class="push">
                                <a onclick="openPr5()"><i class="ti-eye eye"></i></a>
                                <a><i class="ti-plus plus"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="body4">
                <div class="address">
                    <div class="text-box">
                        <h4 class="infor">Visit Our Office</h4>
                        <p>56/8, bir uttam qazi nuruzzaman road,
                            west panthapath, kalabagan, Dhanmondi, Dhaka - 1205</p>
                    </div>
                    <div class="text-box">
                        <h4 class="infor">Let’s call us</h4>
                        <p>Phone 01: 012-6532-568-9746
                            <br>Phone 02: 012-6532-568-9748 <br>FAX: 02-6532-568-746
                        </p>
                    </div>
                    <div class="text-box">
                        <h4 class="infor">Let’s Email Us</h4>
                        <p>hello@colorlib.com
                            <br>mainhelpinfo@colorlib.com
                            <br>infohelp@colorlib.com
                        </p>
                    </div>
                    <div class="text-box">
                        <h4 class="infor">Customer Support</h4>
                        <p>support@colorlib.com
                            <br>emergencysupp@colorlib.com
                            <br> extremesupp@colorlib.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <?php include('Views/Layouts/footer.php') ?>
</body>

</html>