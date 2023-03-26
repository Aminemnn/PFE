<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Job4Free</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('homeAssets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('homeAssets/css/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('homeAssets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('homeAssets/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('homeAssets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('homeAssets/css/owl.carousel.min.css"')}}">
    <link href="{{asset('homeAssets/css/owl.theme.default.min.css')}}" rel="stylesoeet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
        .material-symbols-sharp {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }

    </style>
</head>
<body style="background-color: whitesmoke">
<p style="margin-left: 33px;margin-top: 23px"><i class="fa-solid fa-arrow-left"></i><a href="{{route('freelancer')}}" style="text-decoration: none;color: black">  Home</a></p>
<div class="news_section layout_padding" style="background-color: whitesmoke" >
    <div class="container" >
        <h1 class="news_taital" style="color: #171214">Settings</h1>
        <div class="news_section_2 layout_padding ">
            <div class="card-set">
                <div class="row">
                    <div class="col-6">
                        <div class="box_main_1" style="background-color: #41dcfb;cursor: pointer">
                            <div class="padding_15">
                                <h2 class="speed_text" style="display: contents;color: white"><a href="{{route('changepasswordfreelancer')}}" style="text-decoration: none;color: white">Security</a></h2><img src="{{asset('assets/security.png')}}" class="rounded" alt="..." width="60px" height="60px" style="float: right">
                                <!-- lenna route changre password-->
                                <div class="post_text" style="color: white"><!-- icone lenna-->you can change your password</div>

                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box_main_1" style="background-color: #41dcfb;cursor: pointer">
                            <div class="padding_15">
                                <h2 class="speed_text" style="display: contents;color: white"><a href="{{route('updateinfo')}}" style="text-decoration: none;color: white">Account</a></h2><img src="{{asset('assets/account.png')}}" class="rounded" alt="..." width="60px" height="60px" style="float: right">
                                <!-- Lenna route update info-->
                                <div class="post_text" style="color: white">you can change your account informations<span style="float: right;"><!-- icone lenna --></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
