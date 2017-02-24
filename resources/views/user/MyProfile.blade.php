@extends('layouts.app')

@section('content')

    <!-- Navbar -->
    @include('Navbar.Navbar')
    <!-- Navbar End -->
    <!-- Sidenav/menu -->
    <br/>
    <nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
                <i class="fa fa-remove"></i>
            </a>
            <img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:45%;" class="w3-round"><br><br>
            <h4 class="w3-padding-0"><b>PORTFOLIO</b></h4>
            <p class="w3-text-grey">Template by W3.CSS</p>
        </div>
        <a href="#portfolio" onclick="w3_close()" class="w3-padding w3-text-teal"><i
                    class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a>
        <a href="#about" onclick="w3_close()" class="w3-padding"><i
                    class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
        <a href="#contact" onclick="w3_close()" class="w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>

        <div class="w3-section w3-padding-top w3-large">
            <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i
                        class="fa fa-facebook-official"></i></a>
            <a href="#" class="w3-hover-white w3-hover-text-purple w3-show-inline-block"><i class="fa fa-instagram"></i></a>
            <a href="#" class="w3-hover-white w3-hover-text-yellow w3-show-inline-block"><i class="fa fa-snapchat"></i></a>
            <a href="#" class="w3-hover-white w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
            <a href="#" class="w3-hover-white w3-hover-text-light-blue w3-show-inline-block"><i
                        class="fa fa-twitter"></i></a>
            <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
        </div>
    </nav>

    <!-- Overlay effect when opening sidenav on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
         title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header class="w3-container" id="portfolio">
            <a href="#"><img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:65px;"
                             class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                        class="fa fa-bars"></i></span>
            <h1><b>My Portfolio</b></h1>

        </header>

        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Norway" style="width:100%"
                     class="w3-hover-opacity">
            </div>
        </div>


        <div class="w3-container w3-padding-large" style="margin-bottom:32px">
            <h4><b>About Me</b></h4>
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of
                lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus
                ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
                Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                congue gravida diam non fringilla.</p>
            <hr>
            {{--action="{{ action('UserController@logUser') }}"--}}
            <form action="form.asp" target="_blank" enctype="multipart/form-data">
                <div class="w3-group">
                    <label>Name</label>
                    <input class="w3-input w3-border" type="text" name="Name" required>
                </div>
                <div class="w3-group">
                    <label>Email</label>
                    <input class="w3-input w3-border" type="text" name="Email" required>
                </div>
                <div class="w3-group">
                    <label>Message</label>
                    <input class="w3-input w3-border" type="text" name="Message" required>
                </div>
                <button type="submit" class="w3-btn w3-padding-large w3-margin-bottom"><i
                            class="fa fa-paper-plane w3-margin-right"></i>Send Message
                </button>
            </form>
        </div>
    </div>

    @include('layouts.Footer')

@endsection