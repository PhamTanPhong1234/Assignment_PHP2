<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../Img/rAKIA.png">
    <link rel="stylesheet" href="../../Asset/themify-icons/themify-icons.css">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Poppins;
        }

        #header {
            position: fixed;
            z-index: 10;
            top: 0;
            right: 0;
            width: 100%;
            height: 80px;
            background-color: #F6F1F1;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.3);
        }

        .navigation {
            width: 80%;
            /* background-color: rebeccapurple; */
            margin: auto;
        }

        #header .navigation .logo {
            width: 200px;
        }

        #header .navigation .nav {
            display: inline-block;
            float: right;
        }

        .navigation .nav li {
            display: inline;
            line-height: 80px;
            padding: 0 24px;
            text-transform: uppercase;

        }

        .navigation .nav li a {
            text-decoration: none;
            color: black;
            transition: all 0.3s ease;

        }

        .navigation li a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header id="header">
        <nav class="navigation">
            <img class="logo" src="Asset/Img/Picture1.png" alt="">
            <ul class="nav">
                <li><a href="./index.php?action=home">Home</a></li>
                <li><a href="./index.php?controller=product&action=index">Product</a></li>
                <li><a href="./index.php?controller=details&action=index">Details</a></li>
                <li><a href="./index.php?controller=contact&action=index">Contact</a></li>
                <li><a href="./index.php?controller=login&action=theme" style="border: 2px #cdcdcd solid;padding:5px;border-radius: 5px;background-color: #cdcdcd;">Login</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>