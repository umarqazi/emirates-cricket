<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="1ufY06BNIHQVuGepSx38NLVlJqohVhHsaH9yn2A8">
    <title>Emirates Cricket Board</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        a{
            text-decoration: none;
        }
        .email-container {
            border: 1px solid #8D0305;
            margin: 10px auto;
            font-family: arial;
            overflow-x: hidden;
        }
        .email-content{
            padding: 20px 15px 0px;
            text-align: center;
        }
        .header-logo {
            max-width: 85px;
            max-height: 130px;
            margin-bottom: 30px;
        }
        h1{
            text-transform: capitalize;
            color: #8D0303;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        p{
            text-align: left;
            margin-bottom: 10px;
            line-height: 1.3em;
            font-size: 16px;
            color: #201F1F;
        }
        .email-btn {
            background: #8D0305;
            font-size: 16px;
            color: #fff;
            text-transform: capitalize;
            padding: 15px 30px;
            margin: 20px 0px 30px;
            display: inline-block;
            border-radius: 30px;
            font-weight: 700;
        }
        .email-footer {
            padding: 20px 15px;
            background: #8D0305;
        }
        .email-icon {
            color: #8D0305;
            font-size: 18px;
            margin-right: 10px;
            margin-bottom: 15px;
            background: #fff;
            padding: 6px 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .footer-text {
            color: #fff;
            font-size: 18px;
            text-transform: capitalize;
        }
        .email-social-icon{
            vertical-align: middle;
        }
    </style>

</head>

<body>

<div class="email-container">
    <div class="email-content">
        <img class="header-logo" src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
        <h1>Player Registration Request Approved</h1>
        <p>Hi Mr. {{$player->first_name.' '.$player->last_name . '!'}}</p>
        <p>Congratulations! We have Approved your Player Registration Request at Emirates Cricket Board.</p>
    </div>
    <div class="email-footer">
        <a href="#" class="email-icon">
            <img class="email-social-icon" src="{{ URL::asset('frontend/assets/images/email-facebook.png') }}" alt="">
        </a>
        <a href="#" class="email-icon">
            <img class="email-social-icon" src="{{ URL::asset('frontend/assets/images/email-instagram.png') }}" alt="">
        </a>
        <a href="#" class="email-icon">
            <img class="email-social-icon" src="{{ URL::asset('frontend/assets/images/email-twitter.png') }}" alt="">
        </a>
        <a href="#" class="email-icon">
            <img class="email-social-icon" src="{{ URL::asset('frontend/assets/images/email-youtube.png') }}" alt="">
        </a>
        <a href="#" class="email-icon">
            <img class="email-social-icon" src="{{ URL::asset('frontend/assets/images/email-linkedin.png') }}" alt="">
        </a>
        <a href="#" class="email-icon">
            <img class="email-social-icon" src="{{ URL::asset('frontend/assets/images/email-pinterest.png') }}" alt="">
        </a>
        <p class="footer-text">{{env('APP_NAME')}}</p>
    </div>
</div>
</body>
</html>
