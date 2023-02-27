<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js
"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        #myModal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: scroll;
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            -webkit-animation-name: fadeIn; /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s;


        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            background-color: #fefefe;
            width: 100%;
            overflow: scroll;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: whitesmoke;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #E1ECFE;
            color: white;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @-webkit-keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }

        @keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }
        #animate{
            --animate-duration: 1s;
        }
        #animate1{
            --animate-duration: 1.1s;
        }
        #animate2{
            --animate-duration: 1.2s;
        }
        #animate3{
            --animate-duration: 1.3s;
        }
        #category{
            --animate-duration: 1.4s;
        }
        #animate4{
            --animate-duration: 1.5s;
        }
        #animate5{
            --animate-duration: 1.6s;
        }
        #animate6{
            --animate-duration: 1.7s;
        }
        #animate7{
            --animate-duration: 1.8s;
        }
        /* Slideshow container */
        .slideshow-container {
            position: relative;
            background: #F7CC7E;

        }

        /* Slides */
        .mySlides {
            display: none;
            padding: 80px;
            text-align: center;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: #888;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;

        }

        /* Position the "next button" to the right */
        .next {
            position: absolute;
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            color: white;
        }

        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 20px;
            background: #ddd;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Add a background color to the active dot/circle */

        /* Add an italic font style to all quotes */
        q {font-style: italic;}

        /* Add a blue color to the author */
        .author {color: cornflowerblue;}
        .col-3{
            margin-left: 60px;
            transform: scale(1.1);
            position: relative;
            right: 23px;
        }
    </style>

</head>
<body>

<x-freelancer-layout>
    <div class="py-12">
        <div class="card text-center" style="width: 80%;height: 200px;margin:auto;border-radius: 56px;background-color: #E1ECFE;border-color: #E1ECFE" id="card">
            <div class="card-body">
                <h5 class="card-title" style="color: #F19B01">Hi ! <h5>{{Auth::user()->name}}</h5></h5>
                <p class="card-text" style="margin-top: 23px">You can publish your work here</p>
                <button type="button" class="btn btn-primary" id="myBtn" style="margin-top: 23px;background-color: #F19B01;border-color: #F19B01;color: white">
                    Posted a Work
                </button>
                <div id="myModal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>

                        </div>
                        <div class="modal-body">
                            <h1  class="animate__animated animate__backInLeft" id="animate" style="font-family: 'Trebuchet MS';text-align: center;font-size: 35px">Fill in the form</h1>
                            <form method="POST" action="{{route('addAd')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-1 animate__animated animate__backInLeft" id="animate1">
                                    <input type="text" class="form-control"  id="exampleFormControlInput1" name="title" placeholder="Title"  style="width: 40%;margin: auto;height: 50px;border-radius: 19px;margin-top: 19px;font-family: 'Trebuchet MS'">
                                </div>
                                <br>

                                <div class="mb-1 animate__animated animate__backInLeft" id="animate3">
                                    <input type="number" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Price" style="width: 40%;margin: auto;height: 50px;border-radius: 19px;font-family: 'Trebuchet MS'">
                                </div>
                                <br>

                                <select class="form-control animate__animated animate__backInLeft" aria-label="Default select example" name="categorie" value="none" id="category" onchange="change1()" style="width: 40%;margin: auto;border-radius: 19px;height:50px ">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                        <option >{{ $category->nom }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory1" id="sub_category_graphics_design1" style="width: 40%;margin: auto;border-radius: 19px;height:50px">
                                    <option value="">Select subcategory</option>
                                    @foreach ($graphics_design as $graphics_design)
                                        <option value="{{ $graphics_design->nom }}" >{{ $graphics_design->nom }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory2" id="sub_category_digital_marketing1" style="width: 40%;margin: auto;border-radius: 19px;height:50px" >
                                    <option value="">Select subcategory</option>
                                    @foreach ($digital_marketing as $digital_marketing)
                                        <option value="{{ $digital_marketing->nom }}" >{{ $digital_marketing->nom }}</option>
                                    @endforeach

                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory3" id="sub_category_writing_translation1" style="width: 40%;margin: auto;border-radius: 19px;height:50px" >
                                    <option value="">Select subcategory</option>
                                    @foreach ($writing_translation as $writing_translation)
                                        <option value="{{ $writing_translation->nom }}" >{{ $writing_translation->nom }}</option>
                                    @endforeach
                                </select>
                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory4" id="sub_category_vedio_annimation1" style="width: 40%;margin: auto;border-radius: 19px;height:50px" >
                                    <option value="">Select subcategory</option>
                                    @foreach ($video_annimation as $video_annimation)
                                        <option value="{{ $video_annimation->nom }}" >{{ $video_annimation->nom }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory5" id="sub_category_music_audio1" style="width: 40%;margin: auto;border-radius: 19px;height:50px" >
                                    <option value="">Select subcategory</option>
                                    @foreach ($music_audio as $music_audio)
                                        <option value="{{ $music_audio->nom }}" >{{ $music_audio->nom }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory6" id="sub_category_programming_tech1" style="width: 40%;margin: auto;border-radius: 19px;height:50px" >
                                    <option value="">Select subcategory</option>
                                    @foreach ($programming_tech as $programming_tech)
                                        <option value="{{ $programming_tech->nom }}" >{{ $programming_tech->nom }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory7" id="sub_category_business1" style="width: 40%;margin: auto;border-radius: 19px;height:50px">
                                    <option value="">Select subcategory</option>
                                    @foreach ($business as $business)
                                        <option value="{{ $business->nom }}" >{{ $business->nom }}</option>
                                    @endforeach
                                </select>
                                <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory8" id="sub_category_life_style1" style="width: 40%;margin: auto;border-radius: 19px;height:50px" >
                                    <option value="">Select subcategory</option>
                                    @foreach ($life_style as $life_style)
                                        <option value="{{ $life_style->nom }}" >{{ $life_style->nom }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <div class="form-group animate__animated animate__backInLeft" id="animate4">
                                    <select class="form-control" id="exampleFormControlSelect1" name="currency" style="width: 40%;margin: auto;border-radius: 19px;height:50px ">
                                        <option>Select Your currency</option>
                                        <option value="USD" selected="selected">United States Dollars</option>
                                        <option value="EUR">Euro</option>
                                        <option value="GBP">United Kingdom Pounds</option>
                                        <option value="DZD">Algeria Dinars</option>
                                        <option value="ARP">Argentina Pesos</option>
                                        <option value="AUD">Australia Dollars</option>
                                        <option value="ATS">Austria Schillings</option>
                                        <option value="BSD">Bahamas Dollars</option>
                                        <option value="BBD">Barbados Dollars</option>
                                        <option value="BEF">Belgium Francs</option>
                                        <option value="BMD">Bermuda Dollars</option>
                                        <option value="BRR">Brazil Real</option>
                                        <option value="BGL">Bulgaria Lev</option>
                                        <option value="CAD">Canada Dollars</option>
                                        <option value="CLP">Chile Pesos</option>
                                        <option value="CNY">China Yuan Renmimbi</option>
                                        <option value="CYP">Cyprus Pounds</option>
                                        <option value="CSK">Czech Republic Koruna</option>
                                        <option value="DKK">Denmark Kroner</option>
                                        <option value="NLG">Dutch Guilders</option>
                                        <option value="XCD">Eastern Caribbean Dollars</option>
                                        <option value="EGP">Egypt Pounds</option>
                                        <option value="FJD">Fiji Dollars</option>
                                        <option value="FIM">Finland Markka</option>
                                        <option value="FRF">France Francs</option>
                                        <option value="DEM">Germany Deutsche Marks</option>
                                        <option value="XAU">Gold Ounces</option>
                                        <option value="GRD">Greece Drachmas</option>
                                        <option value="HKD">Hong Kong Dollars</option>
                                        <option value="HUF">Hungary Forint</option>
                                        <option value="ISK">Iceland Krona</option>
                                        <option value="INR">India Rupees</option>
                                        <option value="IDR">Indonesia Rupiah</option>
                                        <option value="IEP">Ireland Punt</option>
                                        <option value="ILS">Israel New Shekels</option>
                                        <option value="ITL">Italy Lira</option>
                                        <option value="JMD">Jamaica Dollars</option>
                                        <option value="JPY">Japan Yen</option>
                                        <option value="JOD">Jordan Dinar</option>
                                        <option value="KRW">Korea (South) Won</option>
                                        <option value="LBP">Lebanon Pounds</option>
                                        <option value="LUF">Luxembourg Francs</option>
                                        <option value="MYR">Malaysia Ringgit</option>
                                        <option value="MXP">Mexico Pesos</option>
                                        <option value="NLG">Netherlands Guilders</option>
                                        <option value="NZD">New Zealand Dollars</option>
                                        <option value="NOK">Norway Kroner</option>
                                        <option value="PKR">Pakistan Rupees</option>
                                        <option value="XPD">Palladium Ounces</option>
                                        <option value="PHP">Philippines Pesos</option>
                                        <option value="XPT">Platinum Ounces</option>
                                        <option value="PLZ">Poland Zloty</option>
                                        <option value="PTE">Portugal Escudo</option>
                                        <option value="ROL">Romania Leu</option>
                                        <option value="RUR">Russia Rubles</option>
                                        <option value="SAR">Saudi Arabia Riyal</option>
                                        <option value="XAG">Silver Ounces</option>
                                        <option value="SGD">Singapore Dollars</option>
                                        <option value="SKK">Slovakia Koruna</option>
                                        <option value="ZAR">South Africa Rand</option>
                                        <option value="KRW">South Korea Won</option>
                                        <option value="ESP">Spain Pesetas</option>
                                        <option value="XDR">Special Drawing Right (IMF)</option>
                                        <option value="SDD">Sudan Dinar</option>
                                        <option value="SEK">Sweden Krona</option>
                                        <option value="CHF">Switzerland Francs</option>
                                        <option value="TWD">Taiwan Dollars</option>
                                        <option value="THB">Thailand Baht</option>
                                        <option value="TTD">Trinidad and Tobago Dollars</option>
                                        <option value="TRL">Turkey Lira</option>
                                        <option value="VEB">Venezuela Bolivar</option>
                                        <option value="ZMK">Zambia Kwacha</option>
                                        <option value="DT">Dinar Tunisien</option>
                                        <option value="XCD">Eastern Caribbean Dollars</option>
                                        <option value="XDR">Special Drawing Right (IMF)</option>
                                        <option value="XAG">Silver Ounces</option>
                                        <option value="XAU">Gold Ounces</option>
                                        <option value="XPD">Palladium Ounces</option>
                                        <option value="XPT">Platinum Ounces</option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <div class="d-flex justify-content-center animate__animated animate__backInLeft" id="animate5">
                                        <div class="btn btn-primary btn-rounded" style="border-radius: 9px;background-color: #89ccff;border-color:#89ccff;width: 40%;">
                                            <label class="form-label text-white m-1" for="customFile2" style="font-family: 'Trebuchet MS'">Choose Image</label>
                                            <input type="file" class="form-control d-none" name="image" id="customFile2" accept="Image/*"  />
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-1 animate__animated animate__backInLeft" id="animate6">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Description" rows="3" style="width: 40%;margin: auto;margin-top: 13px;border-radius: 19px;font-family: 'Trebuchet MS'"></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary animate__animated animate__backInLeft" id="animate7"  style="width: 40%;border-radius: 9px;background-color: #F19B01;border-color: #F19B01;font-family: 'Trebuchet MS'">Publish</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slideshow-container">
        <div class="mySlides">
            <div class="container">
                @php
                    $count = 0;
                @endphp
                <div class="row">
                    @foreach($image as $img)
                        @if($count % 3 == 0 && $count != 0)
                </div>
                <br>
                <br>
                <div class="row">
                    @endif
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('../../../uploads/poste/'.$img->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><strong>Name:</strong>{{$img->name_user}}</p>
                                <p class="card-text"><strong>Des:</strong>{{$img->description}}</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $count++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mySlides">
            <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
            <p class="author">- Ernest Hemingway</p>
        </div>

        <div class="mySlides">
            <q>I have not failed. I've just found 10,000 ways that won't work.</q>
            <p class="author">- Thomas A. Edison</p>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    @if (session('status'))
        <script>
            Swal.fire(
                'Good job!',
                'Your data has been registered successfully!',
                'success'
            )
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
</x-freelancer-layout>

    @if(Auth::user()->categorie==null)
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                                        <div class="mt-3">
                                            <form  method="POST" action="{{route('freelancer')}}">
                                                @csrf
                                            <label style="font-family: 'Trebuchet MS'">Category</label><span style="color: red !important; display: inline; float: none;">*</span>
                                            <select class="form-select" aria-label="Default select example" name="categorie" value="none" id="category" onchange="change()">
                                                <option value="">Select category</option>
                                                @foreach ($categories as $category)
                                                    <option >{{ $category->nom }}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <label style="font-family: 'Trebuchet MS'" id="labelcategory">Sub Category</label>
                                            <select class="form-select" aria-label="Default select example" name="subcategory1" id="sub_category_graphics_design" onchange="change2()" >
                                                <option value="">Select subcategory</option>
                                                @foreach ($graphics_design as $graphics_design)
                                                    <option value="{{ $graphics_design->nom }}" >{{ $graphics_design->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory2" id="sub_category_digital_marketing" onchange="change2()" >
                                                <option value="">Select subcategory</option>
                                                @foreach ($digital_marketing as $digital_marketing)
                                                    <option value="{{ $digital_marketing->nom }}" >{{ $digital_marketing->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory3" id="sub_category_writing_translation" onchange="change2()" >
                                                <option value="">Select subcategory</option>
                                                @foreach ($writing_translation as $writing_translation)
                                                    <option value="{{ $writing_translation->nom }}" >{{ $writing_translation->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory4" id="sub_category_vedio_annimation" onchange="change2()" >
                                                <option value="">Select subcategory</option>
                                                @foreach ($video_annimation as $video_annimation)
                                                    <option value="{{ $video_annimation->nom }}" >{{ $video_annimation->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory5" id="sub_category_music_audio" onchange="change2()">
                                                <option value="">Select subcategory</option>
                                                @foreach ($music_audio as $music_audio)
                                                    <option value="{{ $music_audio->nom }}" >{{ $music_audio->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory6" id="sub_category_programming_tech" onchange="change2()">
                                                <option value="">Select subcategory</option>
                                                @foreach ($programming_tech as $programming_tech)
                                                    <option value="{{ $programming_tech->nom }}" >{{ $programming_tech->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory7" id="sub_category_business" onchange="change2()">
                                                <option value="">Select subcategory</option>
                                                @foreach ($business as $business)
                                                    <option value="{{ $business->nom }}" >{{ $business->nom }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                            <select class="form-select" aria-label="Default select example" name="subcategory8" id="sub_category_life_style" onchange="change2()">
                                                <option value="">Select subcategory</option>
                                                @foreach ($life_style as $life_style)
                                                    <option value="{{ $life_style->nom }}" >{{ $life_style->nom }}</option>
                                            @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                                <br>
                                                <input class="form-control" type="text"  aria-label="default input example" name="other" id="other" placeholder="enter your subcategory here" style="border-color: gray; border-radius: 5px">
                                                <br>
                                                <label for="country" style="font-family: 'Trebuchet MS'">Country</label><span style="color: red !important; display: inline; float: none;">*</span>
                                                <select id="country" name="country" class="form-control" >
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <br>
                                                <label>Phone</label><span style="color: red !important; display: inline; float: none;">*</span>
                                                <input class="form-control" type="text"  aria-label="default input example" name="phone" required style="border-color: gray; border-radius: 5px">
                                                <br>
                                                <label>City</label><span style="color: red !important; display: inline; float: none;">*</span>
                                                <input class="form-control" type="text"  aria-label="default input example" name="ville" required style="border-color: gray; border-radius: 5px">
                                                <br>
                                                <label>Adress</label><span style="color: red !important; display: inline; float: none;">*</span>
                                                <input class="form-control" type="text"  aria-label="default input example" name="adresse" required style="border-color: gray; border-radius: 5px">
                                                <br>
                                                <label>Postal code</label><span style="color: red !important; display: inline; float: none;">*</span>
                                                <input class="form-control" type="number"  aria-label="default input example" name="code" required style="border-color: gray; border-radius: 5px">
                                                <br>
                                                <button type="submit" class="btn btn-primary" style="background-color: #f59977 ;color: white;border-color: #f59977; width: 100%; font-family: 'Trebuchet MS'">Save</button>
                                            </form>

                                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var modal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {backdrop: 'static', keyboard: false});
                modal.show();
            });
        </script>
    @endif
<script>

function change() {
    var selectElement = document.getElementById("category");
    var displaytext = selectElement.options[selectElement.selectedIndex].text;
    if (displaytext=="Select category"){
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="none";
        document.getElementById("span").style.display="none";
        document.getElementById("other").style.display="none";
    }
    if (displaytext=="Graphics & Design"){
        document.getElementById("sub_category_graphics_design").style.display="block";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("span").style.display="block";
        document.getElementById("other").style.display="none";
        console.log(displaytext);
    }
    if (displaytext=="Digital Marketing"){
        document.getElementById("sub_category_digital_marketing").style.display="block";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";
    }
    if (displaytext=="Writing & Translation"){
        document.getElementById("sub_category_writing_translation").style.display="block";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";
    }
    if (displaytext=="Video & Animation"){
        document.getElementById("sub_category_vedio_annimation").style.display="block";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";
    }
    if (displaytext=="Music & Audio"){
        document.getElementById("sub_category_music_audio").style.display="block";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";

    }
    if (displaytext=="Programming & Tech"){
        document.getElementById("sub_category_programming_tech").style.display="block";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";
    }
    if (displaytext=="Business"){
        document.getElementById("sub_category_business").style.display="block";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";
    }

    if (displaytext=="Lifestyle"){
        document.getElementById("sub_category_life_style").style.display="block";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("labelcategory").style.display="block";
        document.getElementById("other").style.display="none";
    }


}
function change2(){
    var graphics=document.getElementById("sub_category_graphics_design");
    var marketing=document.getElementById("sub_category_digital_marketing");
    var writing=document.getElementById("sub_category_writing_translation");
    var video=document.getElementById("sub_category_vedio_annimation");
    var music=document.getElementById("sub_category_music_audio");
    var programming=document.getElementById("sub_category_programming_tech");
    var business=document.getElementById("sub_category_business");
    var lifestyle=document.getElementById("sub_category_life_style");

    var displaygraphics = graphics.options[graphics.selectedIndex].text;
    var displaymarketing=marketing.options[marketing.selectedIndex].text;
    var displaymwriting=writing.options[writing.selectedIndex].text;
    var displayvideo=video.options[video.selectedIndex].text;
    var displaymusic=music.options[music.selectedIndex].text;
    var displayprogramming=programming.options[programming.selectedIndex].text;
    var displaybusiness=business.options[business.selectedIndex].text;
    var displaylifestyle=lifestyle.options[lifestyle.selectedIndex].text;

    if(displaymarketing=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaygraphics=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaymwriting=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displayvideo=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaymusic=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displayprogramming=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaybusiness=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaylifestyle=="Other"){
        document.getElementById("other").style.display="block";
    }

    if(displaymarketing=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaygraphics=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaymwriting=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displayvideo=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaymusic=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displayprogramming=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaybusiness=="Other"){
        document.getElementById("other").style.display="block";
    }
    if(displaylifestyle=="Other"){
        document.getElementById("other").style.display="block";
    }

}
        document.getElementById("other").style.display="none";
        document.getElementById("sub_category_graphics_design").style.display="none";
        document.getElementById("sub_category_digital_marketing").style.display="none";
        document.getElementById("sub_category_writing_translation").style.display="none";
        document.getElementById("sub_category_vedio_annimation").style.display="none";
        document.getElementById("sub_category_music_audio").style.display="none";
        document.getElementById("sub_category_programming_tech").style.display="none";
        document.getElementById("sub_category_business").style.display="none";
        document.getElementById("sub_category_life_style").style.display="none";
        document.getElementById("labelcategory").style.display="none";
        document.getElementById("span").style.display="none";

    </script>
<script>
    function change1() {
        var selectElement = document.getElementById("category");
        var displaytext = selectElement.options[selectElement.selectedIndex].text;
        if (displaytext=="Select category"){
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";

        }
        if (displaytext=="Graphics & Design"){
            document.getElementById("sub_category_graphics_design1").style.display="block";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Digital Marketing"){
            document.getElementById("sub_category_digital_marketing1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Writing & Translation"){
            document.getElementById("sub_category_writing_translation1").style.display="block";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Video & Animation"){
            document.getElementById("sub_category_vedio_annimation1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Music & Audio"){
            document.getElementById("sub_category_music_audio1").style.display="block";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";



        }
        if (displaytext=="Programming & Tech"){
            document.getElementById("sub_category_programming_tech1").style.display="block";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";


        }
        if (displaytext=="Business"){
            document.getElementById("sub_category_business1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }

        if (displaytext=="Lifestyle"){
            document.getElementById("sub_category_life_style1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";


        }
    }
    document.getElementById("sub_category_graphics_design1").style.display="none";
    document.getElementById("sub_category_digital_marketing1").style.display="none";
    document.getElementById("sub_category_writing_translation1").style.display="none";
    document.getElementById("sub_category_vedio_annimation1").style.display="none";
    document.getElementById("sub_category_music_audio1").style.display="none";
    document.getElementById("sub_category_programming_tech1").style.display="none";
    document.getElementById("sub_category_business1").style.display="none";
    document.getElementById("sub_category_life_style1").style.display="none";

</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
