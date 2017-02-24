<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/12/2017
 * Time: 10:17 PM
 */

namespace App\Classes\Validate;

use Illuminate\Http\Request;


class FileService
{

    public function validateFileUpload(Request $oRequest)
    {
        $aRules = array('fileUpload' => 'mimes:mp4,3gp,jpeg,png,jpg,gif');
        $oValidate = \Validator::make($oRequest->file('fileUpload'), $aRules);
        if (!$oValidate->passes()) {

            exit('video error img');
            $aError['comment_error'] = $oValidate->errors()->all();
            return $aError;
        } else {

            dd($oRequest->file('fileUpload'));


            dd($oRequest->file('fileUpload')->getClientMimeType());
            dd($oRequest->file('mimeType'));

            dd($ofile->getRealPath());
            exit('OKKKK');
            return $oRequest->input('comment');
        }
    }

    public function createFolder()
    {

    }

    public function generateFileName()
    {

    }



}