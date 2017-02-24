<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/12/2017
 * Time: 10:16 PM
 */

namespace App\Classes\Validate;

use Illuminate\Http\Request;


class ValidateFormService extends FileService
{

    public function validateComment(Request $oRequest)
    {
        $aRules = array('comment' => 'Max:500',);

        $oValidate = \Validator::make($oRequest->all(), $aRules);
        if (!$oValidate->passes()) {
            $aError['comment_error'] = $oValidate->errors()->all();
            return $aError;
        } else {
            return $oRequest->input('comment');
        }
    }
}