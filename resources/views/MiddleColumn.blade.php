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

    @include('PostResult')

    <!-- End Middle Column -->
</div>