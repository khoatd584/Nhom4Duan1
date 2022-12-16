</head>


<body>
    <main>
        <div class="bill_left">
            <h2>Enter your name and address:</h2>
            <form action="./index.php?act=billcomfirm" method="POST">
                <div class="form-group">
                    <input id="fullname" name="user" type="text" placeholder="Full Name" class="form-control" value="<?= $user ?>" required />
                </div>

                <div class="form-group">
                    <input id="email" name="email" type="text" placeholder="Email" class="form-control" value="<?= $email ?>" required />
                </div>

                <div class="form-group">
                    <input id="password" name="address" type="text" placeholder="Address" class="form-control" value="<?= $address ?>" required />
                </div>

                <div class="form-group">
                    <input id="password" name="tel" type="text" placeholder="Phone" class="form-control" value="<?= $tel ?>" required />
                </div>
                <div style="padding-left: 13px; display: inherit;" class="form-group">
                    <h3>Thanh toán khi nhận hàng</h3>
                    <input style="margin-left: -100px;" type="radio" name="pttt" value="Thanh toán khi nhận hàng" class="form-control" checked id="">
                </div>
                <div style="padding-left: 13px; display: inherit;" class="form-group">
                    <h3 class="form-group">Thanh toán trực tuyến</h3>
                    <input style="margin-left: -100px;" type="radio" name="pttt" value="Thanh toán trực tuyến" class="form-control" id="">
                </div>
                <input name="dongydathang" type="submit" class="form-submit" value="Continue" />
            </form>
        </div>
        <div class="bill_right">
            <h2>Order Summary:</h2>
            <div class="total">
                <?php
                total();
                ?>
            </div>
        </div>
    </main>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    if (isset($_POST['dathang'])) {
        require './PHPMailer-master/src/Exception.php';
        require './PHPMailer-master/src/PHPMailer.php';
        require './PHPMailer-master/src/SMTP.php';

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->charSet = "UTF-8";
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'khoatdpc04409@fpt.edu.vn';
            $mail->Password   = '04042003tdK';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('system@xxx.com', 'Nike');
            $mail->addAddress($email, $user);

            $mail->isHTML(true);
            $mail->Subject = 'ĐƠN HÀNG GIÀY CỦA BẠN';
            $mail->Body    = $content;

            $mail->send();
            echo 'Đã gửi đơn hàng thành công';
        } catch (Exception $e) {
            echo "Lỗi gửi mail: {$mail->ErrorInfo}";
        }
    }
    ?>
    <style>
        main {
            width: 80%;
            margin: 0 auto;
            display: flex;
        }

        .bill_left {
            width: 60%;
        }

        .bill_right {
            width: 30%;
        }

        .title {
            color: #111111;
            font-size: 20px;
            font-weight: 700;
            line-height: 26px;
            margin: 0px 17.7083px 0px 17.6979px;
            padding: 10px 0px 27px;
            text-align: center;
        }

        .title p {
            color: #8d8d8d;
            font-size: 14px;
            font-weight: 400;
            margin: 0px 17.7083px 0px 17.6979px;
            padding: 10px 0px;
            text-align: center;
        }

        .bill_left form {
            color: #8d8d8d;
            font-size: 14px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
        }

        .form-group input {
            background-color: #ffffff;
            border-color: #e5e5e5;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px;
            color: #8d8d8d;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 17px;
            width: 300px;
            margin: 15px;
            padding: 15px 20px;
        }

        input:hover,
        input:focus {
            border-color: #1dbfaf;
        }

        form p a {
            font-size: 13px;
            color: #9e9e9e;
            text-decoration: underline;
        }

        input[type="button"],
        input[type="submit"] {
            background-color: #000000;
            color: #ffffff;
            cursor: pointer;
            padding: 10px 25px;
            border-radius: 4px;
            outline: none;
            border: none;
        }

        .cart_right {
            width: 30%;
        }

        .row1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0px;
        }

        .row1 span,
        .row1 p {
            font-size: 15px;
        }

        .pay {
            text-align: center;
            margin: 0;
        }

        .pay_btn {
            width: 100%;
            background-color: #111111;
            color: #fff;
            padding: 15px 25px;
            border: none;
            border-radius: 4px;
        }

        .pay_btn:hover {
            background-color: #7e7e7e;
            color: #e2e2e2;
        }

        .space {
            margin-bottom: 25px;
            padding: 7px 0px;
            border-bottom: 0.2px solid #c4c4c4;
        }
    </style>