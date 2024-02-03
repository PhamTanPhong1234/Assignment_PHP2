<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - Rakia Studio</title>
    <link rel="stylesheet" href="../../Asset/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/png" href="..//Image/rAKIA.png">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Poppins;

        }

        /* header */

        /* header */
        /* body */
        /* element */
        #box {
            width: 80%;
            margin: auto;
            height: 600px;


        }

        form {
            margin-top: 220px;

        }

        #box h1 {
            background: linear-gradient(to right, #30CFD0 0%, #5e08c8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        form .txt_field {
            position: relative;
            margin: 40px 70px;
            border-bottom: 2px solid #adadad;
        }

        .txt_field input {
            width: 100%;
            padding: 0 5px;
            height: 50px;
            font-size: 20px;
            border: none;
            background: none;
            outline: none;
        }

        .txt_field label {
            font-weight: 700;
            position: absolute;
            top: 50%;
            left: 5px;
            z-index: 1;
            color: #adadad;
            transform: translateY(-50%);
            pointer-events: none;
            transition: 0.3s;
        }

        .txt_field span::before {
            content: '';
            position: absolute;
            top: 50px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #2691d9;
        }

        .txt_field input:focus~label,
        .txt_field input:valid~label {
            top: -5px;
            color: #2691d9;
        }

        .pass {
            float: right;
            margin-right: 60px;
            margin-bottom: 20px;
        }

        .pass a {
            color: black;

        }

        .pass a:hover {
            opacity: 0.5;
        }

        #box-button {
            width: 100%;
            display: flex;
            align-items: center;

            justify-content: center;
        }



        .input {
            width: 70%;
            height: 40px;
            margin: auto;
            font-size: 17px;
            border: 2px solid #2f3132;
            background-color: #2f3132;
            color: #fff;
            transition: 0.2s;
        }

        .input:hover {
            background: none;
            color: #2f3132;
        }

        .signup_link {
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }

        .signup_link a {
            color: black;

        }

        .signup_link a:hover {
            opacity: 0.5;
        }

        /* element */
        /* body */
        /* footer */
        #footer {
            margin-top: 200px;
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

        /* footer */
    </style>
</head>

<body>
    <?php include('Layouts/header.php'); ?>
    <div id="body">
        <div id="box">
            <form method="post">
                <h1 style="width: 100%; text-align: center;letter-spacing: 2px;">LET REGISTER TO DISCOVER</h1>
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label for="">User Name</label>
                </div>
                <div class="txt_field">
                    <input type="email" required>
                    <span></span>
                    <label for="">Email</label>
                </div>
                <div class="txt_field">
                    <input type="text" required>
                    <span class="togglePassword"></span>
                    <label for="">Phone Number</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span class="togglePassword"></span>
                    <label for="">Password</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label for="">Confirm Password</label>
                </div>
                <br>
                <div id="box-button"><input class="input" type="submit" value="Sign Up"></div>
                <div class="signup_link">
                    Have an account already ? <a href="./index.php?controller=login&action=theme">Login Now</a>

                </div>
            </form>
        </div>
    </div>
    </main>
    <?php include('Layouts/footer.php'); ?>
</body>

</html>