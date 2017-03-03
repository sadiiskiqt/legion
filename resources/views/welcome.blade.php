<?php
header('Location: legion');
exit();
?>
@extends('layouts.app')
<style type="text/css">
    .bgimg {
        background-image: url('public/img/mma.gif');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
</style>
@section('content')
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
            mmaLegion.Com
        </div>
        <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top"><a href="legion">Начало</a></h1>
            {{--<h1 class="w3-jumbo w3-animate-top"><a href="#">В процес на разработка</a></h1>--}}
        </div>
    </div>
@endsection