<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <style>
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
    </style>
</head>
<body>
@if (session('status'))
    <script>
        Swal.fire(
            'Good job!',
            'Your data has been registered successfully!',
            'success'
        )
    </script>
@endif
<div style="margin-top: 3%">
<h1  class="animate__animated animate__backInLeft" id="animate" style="font-family: 'Trebuchet MS';text-align: center">Fill in the form</h1>
<form method="POST" action="{{route('addAd')}}">
    @csrf
    <div class="mb-1 animate__animated animate__backInLeft" id="animate1">
        <input type="text" class="form-control"  id="exampleFormControlInput1" name="title" placeholder="Title"  style="width: 20%;margin: auto;height: 50px;border-radius: 19px;margin-top: 19px;border-color: #F19B01;font-family: 'Trebuchet MS'">
    </div>
    <br>
    <div class="mb-1 animate__animated animate__backInLeft" id="animate2">
        <input type="number" class="form-control" id="exampleFormControlInput1" name="nb_hours" placeholder="number of hours" min="1" style="width: 20%;margin: auto;height: 50px;border-radius: 19px;border-color: #F19B01;font-family: 'Trebuchet MS'">
    </div>
    <br>
    <div class="mb-1 animate__animated animate__backInLeft" id="animate3">
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Price" style="width: 20%;margin: auto;height: 50px;border-radius: 19px;border-color: #F19B01;font-family: 'Trebuchet MS'">
    </div>
    <br>

    <select class="form-control animate__animated animate__backInLeft" aria-label="Default select example" name="categorie" value="none" id="category" onchange="change()" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px ">
        <option value="">Select category</option>
        @foreach ($categories as $category)
            <option >{{ $category->nom }}</option>
        @endforeach
    </select>
    <br>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory1" id="sub_category_graphics_design" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px">
        <option value="">Select subcategory</option>
        @foreach ($graphics_design as $graphics_design)
            <option value="{{ $graphics_design->nom }}" >{{ $graphics_design->nom }}</option>
        @endforeach
    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory2" id="sub_category_digital_marketing" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($digital_marketing as $digital_marketing)
            <option value="{{ $digital_marketing->nom }}" >{{ $digital_marketing->nom }}</option>
        @endforeach

    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory3" id="sub_category_writing_translation" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($writing_translation as $writing_translation)
            <option value="{{ $writing_translation->nom }}" >{{ $writing_translation->nom }}</option>
        @endforeach

    </select>
    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory4" id="sub_category_vedio_annimation" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($video_annimation as $video_annimation)
            <option value="{{ $video_annimation->nom }}" >{{ $video_annimation->nom }}</option>
        @endforeach

    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory5" id="sub_category_music_audio" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($music_audio as $music_audio)
            <option value="{{ $music_audio->nom }}" >{{ $music_audio->nom }}</option>
        @endforeach
    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory6" id="sub_category_programming_tech" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($programming_tech as $programming_tech)
            <option value="{{ $programming_tech->nom }}" >{{ $programming_tech->nom }}</option>
        @endforeach

    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory7" id="sub_category_business" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($business as $business)
            <option value="{{ $business->nom }}" >{{ $business->nom }}</option>
        @endforeach
    </select>
    <select class="form-control animate__animated animate__fadeInDown" aria-label="Default select example" name="subcategory8" id="sub_category_life_style" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px" >
        <option value="">Select subcategory</option>
        @foreach ($life_style as $life_style)
            <option value="{{ $life_style->nom }}" >{{ $life_style->nom }}</option>
        @endforeach
    </select>
    <br>
    <div class="form-group animate__animated animate__backInLeft" id="animate4">
        <select class="form-control" id="exampleFormControlSelect1" name="currency" style="width: 20%;margin: auto;border-radius: 19px;border-color: #F19B01;height:50px ">
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
            <div class="btn btn-primary btn-rounded" style="border-radius: 9px;background-color: #89ccff;border-color: #89ccff;width: 20%;">
                <label class="form-label text-white m-1" for="customFile2" style="font-family: 'Trebuchet MS'">Choose Image</label>
                <input type="file" class="form-control d-none" name="image" id="customFile2" accept="Image/*"  />
            </div>
        </div>
    </div>
    <br>
    <div class="mb-1 animate__animated animate__backInLeft" id="animate6">
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Description" rows="3" style="width: 20%;margin: auto;margin-top: 13px;border-radius: 19px;border-color: #F19B01;font-family: 'Trebuchet MS'"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary animate__animated animate__backInLeft" id="animate7"  style="width: 20%;margin-left: 40%;border-radius: 9px;background-color: #89ccff;border-color: #89ccff;font-family: 'Trebuchet MS'">Publish</button>
</form>
</div>
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

        }


    }
    document.getElementById("sub_category_graphics_design").style.display="none";
    document.getElementById("sub_category_digital_marketing").style.display="none";
    document.getElementById("sub_category_writing_translation").style.display="none";
    document.getElementById("sub_category_vedio_annimation").style.display="none";
    document.getElementById("sub_category_music_audio").style.display="none";
    document.getElementById("sub_category_programming_tech").style.display="none";
    document.getElementById("sub_category_business").style.display="none";
    document.getElementById("sub_category_life_style").style.display="none";
    document.getElementById("labelcategory").style.display="none";
</script>
</body>
</html>
