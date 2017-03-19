@extends('layouts.app')

@section('content')

    <!-- Navbar -->
    @include('Navbar.Navbar')
    <!-- Navbar End -->
    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3">
                <!-- Profile -->
            @if (!Auth::guest())

                @include('user.profile')
                <!-- Accordion -->
                @include('Accordion')

            @endif
            <!-- Interests -->
            @include('Interests')
            <!-- Alert Box -->
                {{--<div class="w3-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">--}}
                {{--<span onclick="this.parentElement.style.display='none'" class="w3-hover-text-grey w3-closebtn">--}}
                  {{--<i class="fa fa-remove"></i>--}}
                {{--</span>--}}
                    {{--<p><strong>Hey!</strong></p>--}}
                    {{--<p>People are looking at your profile. Find out who.</p>--}}
                {{--</div>--}}

                <!-- End Left Column -->
            </div>
            <!-- Middle Column -->
        @include('MiddleColumn')
        <!-- End Middle Column -->

            <!-- Right Column -->
        @include('Colums.RightColumn')
        <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>
    <br>

    @include('layouts.Footer')
@endsection