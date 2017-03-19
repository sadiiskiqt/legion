<!-- Profile -->
<div class="w3-card-2 w3-round w3-white">
    <div class="w3-container">
        <a href="myprofile/{{ Auth::user()->id}}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита">
            <h4 class="w3-center">Профил</h4>
        </a>
        <p class="w3-center">
            <img src="{{ URL::asset('public/img/legion/logo1.jpg') }}" class="w3-circle" style="height:106px;width:106px"
                 alt="Avatar"></p>
        <hr>
        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
    </div>
</div>
<br>
