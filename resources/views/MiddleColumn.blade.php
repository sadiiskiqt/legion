<!-- Middle Column -->
<style type="text/css">
    textarea {
        width: 100%;
        height: 100%;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }
</style>
<div class="w3-col m7">
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container w3-padding">
                    @if(Session::has('post_errors'))
                        <div class="isa_error">
                            <i class="fa fa-times-circle"></i>
                            {!! session('post_errors') !!}
                            <a class="log_error" href="{{ route('login') }}">Вход / </a>
                            <a class="log_error" href="{{ route('register') }}"> Нов Потребител</a>
                        </div>
                    @endif

                    @if(Session::has('form_errors'))
                        <div class="isa_error">
                            <i class="fa fa-times-circle"></i>
                            {!! session('form_errors') !!}
                        </div>
                    @endif

                    @if(Session::has('flash_message'))
                        <div class="isa_info">
                            <i class="fa fa-info-circle"></i>
                            {!! session('flash_message') !!}
                        </div>
                    @endif

                    <h6 class="w3-opacity">Добавете коментар или качете снимки, клип, gif.</h6>
                    <form method="post" action="{{ action('UserController@myPost') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <textarea name="comment"></textarea>
                        <input type="file" name="fileUpload[]" value="">
                        @if (!Auth::guest())
                            <input type="hidden" name="upload_from" value="{{ Auth::user()->id }}">
                        @endif
                        <button type="submit" class="w3-btn w3-theme"><i class="fa fa-pencil"></i> Публикуваи</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
             style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>John Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.</p>
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:100%" alt="Northern Lights"
                     class="w3-margin-bottom">
            </div>
            <div class="w3-half">
                <img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:100%" alt="Nature"
                     class="w3-margin-bottom">
            </div>
        </div>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like
        </button>
        <button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment
        </button>
    </div>

    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
             style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like
        </button>
        <button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment
        </button>
    </div>

    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="{{ URL::asset('public/img/asd.jpg') }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
             style="width:60px">
        <span class="w3-right w3-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="{{ URL::asset('public/img/asd.jpg') }}" style="width:100%" class="w3-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like
        </button>
        <button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment
        </button>
    </div>

    <!-- End Middle Column -->
</div>