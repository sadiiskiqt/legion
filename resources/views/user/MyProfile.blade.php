<!DOCTYPE html>
<html>
<title title="Спортен клуб ЛЕГИОНЪ - муай тай, кикбокс, мма, самозащита">
    Спортен клуб ЛЕГИОНЪ - муай тай, кикбокс, мма, самозащита</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }


</style>

@if(!empty($aResults['aPersonData']))
    @foreach($aResults['aPersonData'] as $oPersonData)
        <?php
        $sName = $oPersonData->name;
        $sEmail = $oPersonData->email;
        $sDay = $oPersonData->day;
        $sMonth = $oPersonData->month;
        $sYear = $oPersonData->year;
        $sGender = $oPersonData->gender;
        $sCategory = $oPersonData->category;
        $sImageName = $oPersonData->sImageName;
        ?>
    @endforeach
@else
    <?php
    $sName = '';
    $sEmail = '';
    $sDay = '';
    $sMonth = '';
    $sYear = '';
    $sGender = '';
    $sCategory = '';
    $sImageName = 'logo1.jpg';
    ?>
@endif
<style>
    .bgimg {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('{{ URL::asset('public/img/PersonImg/'.$sImageName) }}');

        min-height: 100%;
    }
</style>
<body>

<!-- Sidenav with image -->
<nav class="w3-sidenav w3-hide-medium w3-hide-small" style="width:40%">
    <div class="bgimg"></div>
</nav>

<!-- Hidden Sidenav (reveals when clicked on menu icon)-->
<nav class="w3-sidenav w3-black w3-animate-right w3-center w3-xxlarge"
     style="display:none;padding-top:150px;right:0;z-index:2" id="mySidenav">
    <a href="javascript:void(0)" onclick="closeNav()" class="w3-closenav w3-xxxlarge w3-display-topright"
       style="padding:0 12px;">
        <i class="fa fa-remove"></i>
    </a>
    <a href="legion" class="w3-text-grey w3-hover-black" onclick="closeNav()">Начало</a>
    <a href="home" class="w3-text-grey w3-hover-black" onclick="closeNav()">Нови Публикации</a>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">


    <!-- Menu icon to open sidenav -->
    <span class="w3-opennav w3-top w3-padding-top w3-xxlarge w3-margin-right w3-text-grey w3-hover-text-black"
          style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>


    <!-- Header -->
    <header class="w3-container w3-padding-128 w3-center" id="home">
        <h1 class="w3-jumbo"><b><?= $sName ?></b></h1>
        <h2><?= $sCategory ?></h2>
    </header>


    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
        {{--<h2>About</h2>--}}
        {{--<hr class="w3-opacity">--}}
        {{--<p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor--}}
        {{--incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
        {{--laboris nisi ut aliquip ex ea commodo--}}
        {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla--}}
        {{--pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id--}}
        {{--est laborum consectetur adipiscing--}}
        {{--elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis--}}
        {{--nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
        {{--</p>--}}
        <h3 class="w3-padding-24">За Мен:</h3>
        <p>
                    <span class="w3-large w3-text-black w3-margin-right">
                     <strong>Име:</strong> <?= $sName ?>
                    </span><br/>
            <span class="w3-large w3-text-black w3-margin-right">
                     <strong>  Имейл: </strong> <?= $sEmail ?>
                    </span><br/>
            <span class="w3-large w3-text-black w3-margin-right">
                      <strong> Рожден ден:</strong> <?= $sDay . '/' . $sMonth . '/' . $sYear ?>
                    </span><br/>
            <span class="w3-large w3-text-black w3-margin-right">
                     <strong>  Пол: </strong> <?= $sGender ?>
                    </span><br/>
            <span class="w3-large w3-text-black w3-margin-right">
                      <strong> Статус: </strong> <?= $sCategory ?>
                    </span><br/>
        </p>

        <!-- Testimonials -->

        <!-- End About Section -->
    </div>

@if($aResults['iPersonId'] == Auth::user()->id)
    @include('user.UpdateForm')
@endif
<!-- Portfolio Section -->
    <div class="w3-padding-32 w3-content" id="portfolio">
        <h2 class="w3-text-grey">Мойте Снимки</h2>
        <hr class="w3-opacity">

        <!-- Grid for photos -->
        <div class="w3-row-padding" style="margin:0 -16px">
            @foreach($aResults['aGetAllUserPostImages'] as $aGetAllUserPostImage)
                <a href="">
                    <img src="{{ URL::asset('storage/app/FileUpload/'.$aGetAllUserPostImage->sPath.'/'.$aGetAllUserPostImage->sOriginalName) }}"
                         style="width:50%; height: 50%; padding-left: 5px; float: right">
                </a>
        @endforeach
        <!-- End photo grid -->
        </div>
        <!-- End Portfolio Section -->
    </div>


    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
        <a href="http://mmalegion.com"><h5>www.MmaLegion.com</h5></a>
        <p title="Спортен клуб ЛЕГИОНЪ - муай тай, кикбокс, мма, самозащита">
            Спортен клуб ЛЕГИОНЪ - муай тай, кикбокс, мма, самозащита
        </p>

        <!-- End footer -->
    </footer>

    <!-- END PAGE CONTENT -->
</div>

<!-- Add Google Maps -->
<script>
    function myMap() {
        myCenter = new google.maps.LatLng(41.878114, -87.629798);
        var mapOptions = {
            center: myCenter,
            zoom: 12, scrollwheel: false, draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }

    // Open and close sidenav
    function openNav() {
        document.getElementById("mySidenav").style.width = "60%";
        document.getElementById("mySidenav").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.display = "none";
    }
</script>
</body>
</html>
