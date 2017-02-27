<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

@include('Navbar.Navbar')

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="{{ URL::asset('public/img/legion/logo1.jpg') }}" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
    {{--<div class="w3-container w3-display-bottomleft w3-margin-bottom">--}}
        {{--<button onclick="document.getElementById('id01').style.display='block'"--}}
                {{--class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS--}}
        {{--</button>--}}
    {{--</div>--}}
</div>

<!-- Modal -->
{{--<div id="id01" class="w3-modal">--}}
    {{--<div class="w3-modal-content w3-card-8 w3-animate-top">--}}
        {{--<header class="w3-container w3-teal">--}}
            {{--<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn"><i--}}
                        {{--class="fa fa-remove"></i></span>--}}
            {{--<h4>Oh snap! We just showed you a modal..</h4>--}}
            {{--<h5>Because we can <i class="fa fa-smile-o"></i></h5>--}}
        {{--</header>--}}
        {{--<div class="w3-container">--}}
            {{--<p>Cool huh? Ok, enough teasing around..</p>--}}
            {{--<p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>--}}
        {{--</div>--}}
        {{--<footer class="w3-container w3-teal">--}}
            {{--<p>Modal footer</p>--}}
        {{--</footer>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>Партньори на ст.Легион</h2>
    {{--<p>Meet the team - our office rats:</p>--}}

    <div class="w3-row"><br>

        <div class="w3-quarter">
            <img src="{{ URL::asset('public/img/sponsor/legionLogo.jpg') }}" alt="Boss" style="width:45%"
                 class="w3-circle w3-hover-opacity">
            {{--<h3>Johnny Walker</h3>--}}
            {{--<p>Web Designer</p>--}}
        </div>

        <div class="w3-quarter">
            <img src="{{ URL::asset('public/img/sponsor/SZ.png') }}" alt="Boss" style="width:45%"
                 class="w3-circle w3-hover-opacity">
            {{--<h3>Rebecca Flex</h3>--}}
            {{--<p>Support</p>--}}
        </div>

        <div class="w3-quarter">
            <img src="{{ URL::asset('public/img/sponsor/federacia-kikboks-bulgaria-logo.jpg') }}" alt="Boss" style="width:45%"
                 class="w3-circle w3-hover-opacity">
            {{--<h3>Jan Ringo</h3>--}}
            {{--<p>Boss man</p>--}}
        </div>

        <div class="w3-quarter">
            <img src="{{ URL::asset('public/img/sponsor/bfmma.png') }}" alt="Boss" style="width:45%"
                 class="w3-circle w3-hover-opacity">
            {{--<h3>Kai Ringo</h3>--}}
            {{--<p>Fixer</p>--}}
        </div>

    </div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

    <div class="w3-quarter">
        <h2>История на клуба</h2>
        <p>Ск Легионъ е наследник на спортен клуб "СТ ГИМ" - най стария регистриран клуб по муай тай и кикбокс в Пловдив
            - през 1990 е регистриран първия ни спортен клуб по бокс и борба, който по късно преминава през няколко
            имена, за да получи името Легионъ.

            Клубът е лицензиран член на Българската конфедерация по кикбокс и муай тай( БККМТ),на Българската федерация
            по смесени бойни изкуства( БФММА) и е вписан в регистъра на Министерството на младежта и спорта
            .Състезателите на клуба през годините участват на състезания от Държавния спортен календар по муай
            тай,кикбокс и мма. Също така на аматьорски и професионални турнири по Лей тай и сан да-1994-1998 Савате-2003
            като клубът става шампион в първия републикански турнир</p>
    </div>

    <div class="w3-quarter">
        <div class="w3-card-2 w3-white">
            <img src="{{ URL::asset('public/img/legion/legion-plovdiv.jpg') }}" alt="Vernazza" style="width:100%">
            <div class="w3-container">
                <h3>ТРЕНИРОВКИ</h3>
                <p> В клубът се провеждат трнеировки по муай тай, кикбокс, мма, combat wrestling, кроссфит,
                    еърсофт.</p>
                <p>Бойни изкуства: деца -всеки делничен ден 18.00</p>
                <p> Основна група: всеки делничен ден 08.30 и 19.00</p>
                <p>Кросфит: всеки делничен ден 08.30 и 18.00</p>
                <p>Еърсофт: събота и неделя 10.00</p>
                <p>Индивидуални тренировки по предварително уговорен график</p>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card-2 w3-white">
            <img src="{{ URL::asset('public/img/legion/BXWfOJc.jpg') }}" alt="Cinque Terre" style="width:100%">
            <div class="w3-container">
                <h3>Цени</h3>
                <p>Деца: 30 лв месечно  </p>
                <p>Основна група: юноши, девойки, мъже и жени 40 лв. месечно</p>
                <p>Кроссфит: 30 лв месечно</p>
                <p>Единична тренировка в група: 5 лв</p>
                <p>Индивидуална тренировка с инструктор: 20 лв.</p>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card-2 w3-white">
            <img src="{{ URL::asset('public/img/legion/NQeVd0f.jpg') }}" alt="Monterosso" style="width:100%">
            <div class="w3-container">
                <h3>СК ЛЕГИОН, гр. Пловдив</h3>
                <p>Легион е създаден през 1990 година като клуб по бокс и борба. Оттогава претърпява няколко
                    пререгистрации и
                    смяна на име, но хората, работещи за развитието на спорта са едни и същи. Вече 25 години ние учим
                    трениращите да удрят, да се борят и да бъдат хора. Треньор:
                    Вихрен Илиев</p>

            </div>
        </div>
    </div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
    <a onclick="w3_open()" class="w3-btn-floating-large w3-teal"
       style="position:absolute;top:-28px;right:24px;z-index:0;">
        <i class="fa fa-plus"></i></a>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
        <div class="w3-col m5">
            <div class="w3-padding-16">
                <span class="w3-xlarge w3-border-teal w3-bottombar">За контакти:</span>
            </div>
            <h3>гр. Пловдив</h3>
            <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Адрес: стадион „Пловдив“, сектор Е1</p>
            <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>Телефон: 0888249888</p>
            <p> Email: legionvi@abv.bg</p>
            <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge">
                </i>  <a href="https://www.facebook.com/SportsClubLegion">Фейсбук:
                    https://www.facebook.com/SportsClubLegion</a></p>
        </div>
        <div class="w3-col m7">
            <iframe   style="width:100%;height:420px;" src="https://www.youtube.com/embed/TsKj7awxRls" frameborder="0" allowfullscreen></iframe>
        {{--<form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">--}}
        {{--<div class="w3-group">--}}
        {{--<label class="w3-label">Name</label>--}}
        {{--<input class="w3-input" type="text" name="Name" required>--}}
        {{--</div>--}}
        {{--<div class="w3-group">--}}
        {{--<label class="w3-label">Email</label>--}}
        {{--<input class="w3-input" type="text" name="Email" required>--}}
        {{--</div>--}}
        {{--<div class="w3-group">--}}
        {{--<label class="w3-label">Message</label>--}}
        {{--<input class="w3-input" type="text" name="Message" required>--}}
        {{--</div>--}}
        {{--<input class="w3-check" type="checkbox" checked name="Like">--}}
        {{--<label class="w3-validate">I Like it!</label>--}}
        {{--<button type="submit" class="w3-button w3-right w3-theme">Send</button>--}}
        {{--</form>--}}
        </div>
    </div>
</div>

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1478.9915436840217!2d24.719870162704478!3d42.15064873180329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39219f821ba47951!2z0KHQv9C-0YDRgtC10L0g0LrQu9GD0LEg0JvQtdCz0LjQvtC90Yot0LzRg9Cw0Lkg0YLQsNC5LNC60LjQutCx0L7QutGBLNC80LzQsA!5e0!3m2!1sen!2sbg!4v1488026048405"
            style="width:100%;height:420px;" frameborder="0" style="border:0" allowfullscreen>
    </iframe>
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>СК "Легион" - Пловдив / SC "Legion" - Plovdiv,</h4>
</footer>
</body>
</html>
