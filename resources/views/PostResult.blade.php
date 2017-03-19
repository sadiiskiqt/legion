{{--<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>--}}
{{--<img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"--}}
{{--style="width:60px">--}}
{{--<span class="w3-right w3-opacity">1 min</span>--}}
{{--<h4>John Doe</h4><br>--}}
{{--<hr class="w3-clear">--}}
{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore--}}
{{--et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut--}}
{{--aliquip ex ea commodo consequat.</p>--}}
{{--<div class="w3-row-padding" style="margin:0 -16px">--}}
{{--<div class="w3-half">--}}
{{--<img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:100%" alt="Northern Lights"--}}
{{--class="w3-margin-bottom">--}}
{{--</div>--}}
{{--<div class="w3-half">--}}
{{--<img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:100%" alt="Nature"--}}
{{--class="w3-margin-bottom">--}}
{{--</div>--}}
{{--</div>--}}
{{--<button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like--}}
{{--</button>--}}
{{--<button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment--}}
{{--</button>--}}
{{--</div>--}}

@foreach($aResults['aResults'] as $aResult)
    <?php $sProfileImage = (!empty($aResult->sImageName)) ? $aResult->sImageName : 'logo1.jpg'; ?>
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        {{--<img src="{{ URL::asset('public/img/PersonImg/'.$sProfileImage) }}" alt="Avatar"--}}
             {{--class="w3-left w3-circle w3-margin-right"--}}
             {{--style="width:60px">--}}
        <span class="w3-right w3-opacity">{{substr($aResult->updated_at, 0, -3)}}</span>
        <h4>{{$aResult->name}}</h4><br>

        @if(!empty($aResult->sOriginalName) && $aResult->sMimeType == 'video/mp4' && $aResult->sMimeType == 'video/mp4')

            <video style="width:100%; max-height:500px;" controls>
                <source src="{{'storage/app/FileUpload/'.$aResult->sPath.'/'.$aResult->sOriginalName}}"
                        type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
            </video>

        @endif
        @if(!empty($aResult->sOriginalName) && $aResult->sMimeType != 'video/mp4')
            <a href="#">
                <img src="{{'storage/app/FileUpload/'.$aResult->sPath.'/'.$aResult->sOriginalName}}" style="width:100%; max-height:500px;"
                     class="w3-margin-bottom">
            </a>
        @endif
        <hr class="w3-clear">

        @if(!empty($aResult->userComment))
            <p>{{$aResult->userComment}}</p>
        @endif


        {{--<button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like--}}
        {{--</button>--}}
        {{--<button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment--}}
        {{--</button>--}}
    </div>

@endforeach
