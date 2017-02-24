<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/12/2017
 * Time: 10:14 PM
 */

namespace App\Classes\User;

use Illuminate\Http\Request;
use App\Classes\Validate\ValidateFormService as ValidateFormService;

class UserService extends UserRepository
{
    private $oValidateFormService;

    public function __construct(ValidateFormService $oValidateFormService)
    {
        $this->oValidateFormService = $oValidateFormService;
    }

    public function userPost(Request $oRequest)
    {
        $aRules = array('upload_from' => 'Required');
        $oValidate = \Validator::make($oRequest->all(), $aRules);
        if (!$oValidate->passes()) {
            \Session::flash('post_errors', 'За да публикувате в сайта трябва първо да влезете!');
            return redirect('home');
        } else {
            if (is_array($this->oValidateFormService->validateComment($oRequest)) && array_key_exists('comment_error', $this->oValidateFormService->validateComment($oRequest))) {
                \Session::flash('form_errors', 'Минимален брои символи(2). Максимален брои символи (500)!');
                return redirect('home');
                //TODO img Error
                //TODO Show Error if comment and image is empty!!!!
            } else {

                dd($this->oValidateFormService->validateFileUpload($oRequest));


                $this->addUserComment(
                    $oRequest->input('upload_from'),
                    $this->oValidateFormService->validateComment($oRequest)
                );
                $this->getCommentId()->id;

                //TODO save image and comment
//                $this->oValidateFormService->validateComment($oRequest);
//                $this->oValidateFormService->validateFileUpload($oRequest);

                \Session::flash('flash_message', 'Успешна публикация');
                return redirect('home');
            }
        }
    }
}