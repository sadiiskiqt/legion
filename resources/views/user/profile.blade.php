<!-- Profile -->
<div class="w3-card-2 w3-round w3-white">
    <div class="w3-container">
        <a href="myprofile/{{ Auth::user()->id}}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита">
            <h4 class="w3-center">Профил</h4>
        </a>
        @if(!empty($aResults['oProfileData']))
            @foreach($aResults['oProfileData'] as $aResults)
                <p class="w3-center">
                    <a href="myprofile/{{ Auth::user()->id}}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита">
                        <img src="{{ URL::asset('public/img/PersonImg/'.$aResults->sImageName) }}" class="w3-circle"
                             style="height:106px;width:106px"
                             alt="Avatar">
                    </a>
                </p>
                <hr>
                <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> {{$aResults->category}}</p>
                {{--<p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>--}}
                <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> {{$aResults->day}}-{{$aResults->month}}-{{$aResults->year}}</p>
            @endforeach
        @else
            <p class="w3-center">
                <a href="myprofile/{{ Auth::user()->id}}/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита">
                    <img src="{{ URL::asset('public/img/legion/logo1.jpg') }}" class="w3-circle"
                         style="height:106px;width:106px"
                         alt="Avatar">
                </a>
            </p>
            <hr>
            <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Редактирай</p>
            {{--<p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>--}}
            <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Добави Дата</p>

        @endif
    </div>
</div>
<br>
