<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/12/2017
 * Time: 10:17 PM
 */

namespace App\Classes\Validate;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class FileService
{
    /**
     * @var string
     */
    private $sPath;

    /**
     * @param Request $oRequest
     * @return array|bool
     */
    public function validateFileUpload(Request $oRequest)
    {
        if (!empty($oRequest->file('fileUpload'))) {
            $aRules = array('fileUpload' => 'mimes:mp4,3gp,jpeg,png,jpg,gif');
            $oValidate = \Validator::make($oRequest->file('fileUpload'), $aRules);
            if (!$oValidate->passes()) {
                exit('video error img');
                $aError['comment_error'] = $oValidate->errors()->all();
                return $aError;
            } else {
                //Generate new save name for the file
//                $sFileName = $this->generateFileName($_FILES['fileUpload']['name']);

                //Create File Folder
                $this->createFolder();
                //Save File in the folder
                move_uploaded_file($_FILES['fileUpload']['tmp_name'][0], $this->sPath . '/' . $_FILES['fileUpload']['name'][0]);
                return $aFileUpload = array(
                    'sFileName' => $_FILES['fileUpload']['name'],
                    'sFileType' => $_FILES['fileUpload']['type'],
                    'sFileTmp' => $_FILES['fileUpload']['tmp_name'],
                    'sFileSize' => $_FILES['fileUpload']['size'],
                    'sPath' => date('Y'),
                );
            }
        } else {
            return false;
        }
    }

    /**
     * Create Folder
     */
    public function createFolder()
    {
        $this->sPath = storage_path() . '/app/FileUpload/' . date('Y');
        \File::makeDirectory($this->sPath, 0775, true, true);
    }

    /**
     * @param $sFileName
     * @return string
     */
    public function generateFileName($aFileName)
    {
        return rand(11111, 99999) . '.' . substr(strrchr($aFileName[0], '.'), 1);
    }


}