<?php
/**
 * Created by PhpStorm.
 * User: Aleksandar
 * Date: 2/12/2017
 * Time: 10:15 PM
 */

namespace App\Classes\User;


class UserRepository
{

    /**
     * @var string
     */
    protected $sCommentTable = 'comment';

    /**
     * @var string
     */
    protected $sImageFileTable = 'post_video_img';

    /**
     * @param $iUserId
     * @param $sComment
     * @param array $aFile
     */
    protected function addUserPost($iUserId, $sComment, array $aFile)
    {
        \DB::table($this->sCommentTable)->insert(
            array(
                'userId' => $iUserId,
                'userComment' => (empty($sComment)) ? '' : $sComment,
                'sOriginalName' => (empty($aFile)) ? '' : $aFile['sFileName'][0],
                'sMimeType' => (empty($aFile)) ? '' : $aFile['sFileType'][0],
                'sPath' => (empty($aFile)) ? '' : $aFile['sPath'],
                'delete' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            )
        );
    }

    /**
     * @return mixed
     */
    protected function getPost()
    {
        return \DB::table($this->sCommentTable)
            ->orderBy('id', 'desc')
            ->where('delete', '==', 0)
            ->get();
        return $aResult = $oResult->toArray();
    }

    /**
     * @return mixed
     */
    protected function getCommentId()
    {
        return \DB::table($this->sCommentTable)->orderBy('id', 'desc')->first();
    }

    /**
     * @param $iUserId
     * @param $iCommentId
     * @param array $aFile
     */
    public function saveFileImageVideo($iUserId, $iCommentId, array $aFile)
    {
        \DB::table($this->sImageFileTable)->insert(
            array(
                'userId' => $iUserId,
                'sCommentId' => $iCommentId,
                'sOriginalName' => $aFile['sFileName'],
                'sMimeType' => $aFile['sFileType'][0],
                'sPath' => $aFile['sPath'],
                'delete' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            )
        );
    }

}