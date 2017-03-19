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

            if (empty($this->oValidateFormService->validateComment($oRequest)) && $this->oValidateFormService->validateFileUpload($oRequest) == false) {
                \Session::flash('form_errors',
                    'Моля Добавете Коментар с Минимален брои символи(2). Максимален брои символи (500).
                     Или качете снимки, клип, gif. В следния формат - mp4,3gp,jpeg,png,jpg,gif!');
                return redirect('home');
            }
            $aFile = ($this->oValidateFormService->validateFileUpload($oRequest) != false) ? $this->oValidateFormService->validateFileUpload($oRequest) : array();

            $iUserId = $oRequest->input('upload_from');
            if (!empty(strlen($this->oValidateFormService->validateComment($oRequest))) > 500) {
                \Session::flash('form_errors', 'Минимален брои символи(2). Максимален брои символи (500)!');
                return redirect('home');
                //TODO img Error
                //TODO Show Error if comment and image is empty!!!!
            } elseif (!empty($this->oValidateFormService->validateComment($oRequest))) {  //Save Comment
                //Save Comment to the database
                $this->addUserPost(
                    $iUserId,
                    $this->oValidateFormService->validateComment($oRequest),
                    $aFile
                );

                //TODO save image and comment
                \Session::flash('flash_message', 'Успешна публикация');
                return redirect('home');
            }

            if ($this->oValidateFormService->validateFileUpload($oRequest) != false) {
                $this->addUserPost(
                    $iUserId,
                    '',
                    $aFile
                );                //TODO save image and comment
                \Session::flash('flash_message', 'Успешна публикация');
                return redirect('home');
            }
        }
    }

    /**
     * @return mixed
     */
    public function getAllUserPost()
    {
        return $this->getPost();
    }

    /**
     * @param Request $oRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateMyProfile(Request $oRequest)
    {
        $aUpdateData = $this->oValidateFormService->validateUpdateMyProfileForm($oRequest);
        $this->updateUserProfile($aUpdateData);
        return redirect('myprofile/' . $aUpdateData['person'] . '/Спортен клуб ЛЕГИОНЪ Пловдив - муай тай, кикбокс, мма, самозащита');
    }

    /**
     * @return mixed
     */
    public function getMyProfileData()
    {
        return $this->getUserProfileData();
    }

    /**
     * @param $iUserId
     * @return mixed
     */
    public function getUserPostImages($iUserId)
    {

        return $this->getMyPostImages($iUserId);
    }

}