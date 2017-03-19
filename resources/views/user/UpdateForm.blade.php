<!-- Contact Section -->

<div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <strong><p>Промяна на информацията:</p></strong>
    <form target="_blank" method="post" action="{{ action('UserController@myProfile') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <p>Промяна на име: <br/>
            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="{{ Auth::user()->name}}"
                   name="Name" value="{{ Auth::user()->name}}">
        </p>
        <p>Кога сте родени? <br/>
            <select name="DOBMonth">
                <option><?php echo (!empty($oPersonData->month)) ? $oPersonData->month : 'Месец'?></option>
                <option value="януари">януари</option>
                <option value="февруари">февруари</option>
                <option value="март">март</option>
                <option value="април">април</option>
                <option value="май">май</option>
                <option value="юни">юни</option>
                <option value="юли">юли</option>
                <option value="август">август</option>
                <option value="септември">септември</option>
                <option value="октомври">октомври</option>
                <option value="ноември">ноември</option>
                <option value="декември">декември</option>
            </select>

            <select name="DOBDay">
                <option><?php echo (!empty($oPersonData->day)) ? $oPersonData->day : 'Ден'?></option>
                @for($x = 1; $x <= 31; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>

            <select name="DOBYear">
                <option><?php echo (!empty($oPersonData->year)) ? $oPersonData->year : 'Година'?></option>
                @for($x = 1940; $x <= date('Y'); $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>
        </p>
        <p>Пол:<br/>
            <select name="gender">
                <option><?php echo (!empty($oPersonData->gender)) ? $oPersonData->gender : 'Пол'?></option>
                <option value="Мъж">Мъж</option>
                <option value="Жена">Жена</option>
            </select>
        </p>
        <p>Член на клуба като:<br/>
            <select name="category">
                <option><?php echo (!empty($oPersonData->category)) ? $oPersonData->category : 'Член на клуба като'?></option>
                <option value="Състезател">Състезател</option>
                <option value="Просто Тренирам">Просто Тренирам</option>
                <option value="Приятел на клуба">Приятел на клуба</option>
                <option value="Спонсор">Спонсор</option>
            </select>
        </p>

        <input type="hidden" name="person" value="{{ Auth::user()->id}}">
        <input type="file" class="w3-button w3-padding-large" name="updateProfileImage" value="<?= $sImageName ?>">
        <p>
            <button class="w3-button w3-padding-large" type="submit">
                <i class="fa fa-paper-plane"></i> Запази промените
            </button>
        </p>
    </form>
    <!-- End Contact Section -->
</div>