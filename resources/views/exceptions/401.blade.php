<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/style.css')}}">
    <title>Exceptions</title>
</head>
<body style="padding:0; margin:0;">
    <div class="exception-conatiner">
        <img src="{{URL::asset('backend/assets/images/error404.png')}}" alt="">
        <h1>401</h1>
        <h2>Unauthorized</h2>
        <h4>Sorry, your request could not be processed.</h4>
        <div>
            <a href="{{route('home')}}" class="btn-home">Home</a>
            <a href="{{route('contact')}}" class="btn-contact">Contact Us</a>
    </div>
    </div>

</body>
</html>
