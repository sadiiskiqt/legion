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
     * @var string
     */
    protected $sUsers = 'users';

    /**
     * @var string
     */
    protected $sMyprofile = 'myprofile';

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
        $oResult = \DB::table($this->sCommentTable)
            ->join('users', $this->sCommentTable . '.userId', '=', 'users.id')
            ->join($this->sMyprofile, $this->sCommentTable . '.userId', '=', $this->sMyprofile . '.userId')

            ->orderBy($this->sCommentTable . '.id', 'desc')
            ->where($this->sCommentTable . '.delete', '==', 0)
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

    /**
     * @param $iUserId
     * @return mixed
     */
    protected function getMyPostImages($iUserId)
    {
        $oResult = \DB::table($this->sCommentTable)
            ->select('id', 'sOriginalName', 'sPath', 'sMimeType')
            ->where('userId', $iUserId)
            ->where('delete', 0)
            ->where('sMimeType', '!=', 'video/mp4')
            ->orderBy('id', 'desc')
            ->get();

        return $aResult = $oResult->toArray();
    }

    /**
     * @param array $aUpdateData
     */
    protected function updateUserProfile($aUpdateData = array())
    {
        $bUser = \DB::table($this->sMyprofile)->select('id')->where('userId', $aUpdateData['person'])->get()->toArray();

        if (empty($bUser)) {
            \DB::table($this->sMyprofile)->insert(
                array(
                    'userId' => $aUpdateData['person'],
                    'day' => $aUpdateData['DOBDay'],
                    'month' => $aUpdateData['DOBMonth'],
                    'year' => $aUpdateData['DOBYear'],
                    'gender' => $aUpdateData['gender'],
                    'myProfileComment' => $aUpdateData['sPath'],
                    'sImageName' => 'logo1.jpg',
                    'sMimeType' => 'img',
                    'sPathProfile' => $aUpdateData['sPath'],
                    'category' => $aUpdateData['category'],
                    'delete' => '0',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                )
            );
        } else {
            \DB::table($this->sMyprofile)
                ->where('id', $aUpdateData['person'])
                ->update([
                    'day' => $aUpdateData['DOBDay'],
                    'month' => $aUpdateData['DOBMonth'],
                    'year' => $aUpdateData['DOBYear'],
                    'gender' => $aUpdateData['gender'],
                    'myProfileComment' => $aUpdateData['sPath'],
                    'sMimeType' => $aUpdateData['sFileType'],
                    'sPathProfile' => $aUpdateData['sPath'],
                    'category' => $aUpdateData['category'],
                    'delete' => '0',
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
        }

        if (!empty($aUpdateData['sFileType'])) {
            \DB::table($this->sMyprofile)
                ->where('id', $aUpdateData['person'])
                ->update([
                    'sImageName' => $aUpdateData['sFileName'],
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
        }

        \DB::table($this->sUsers)
            ->where('id', $aUpdateData['person'])
            ->update(['name' => $aUpdateData['Name']]);

    }

    /**
     * @return mixed
     */
    protected function getUserProfileData()
    {
        $iProfile = (isset(\Auth::user()->id)) ? \Auth::user()->id : 0;

        $oResult = \DB::table($this->sMyprofile)
            ->select(
                $this->sMyprofile . '.day',
                $this->sMyprofile . '.month',
                $this->sMyprofile . '.year',
                $this->sMyprofile . '.gender',
                $this->sMyprofile . '.sImageName',
                $this->sMyprofile . '.sPathProfile',
                $this->sMyprofile . '.category',
                $this->sMyprofile . '.sImageName',
                $this->sUsers . '.name',
                $this->sUsers . '.email'

            )
            ->join($this->sUsers, $this->sMyprofile . '.userId', '=', $this->sUsers . '.id')
            ->orderBy($this->sMyprofile . '.id', 'desc')
            ->where($this->sMyprofile . '.delete', '==', 0)
            ->where($this->sMyprofile . '.userId', $iProfile)
            ->get();
        return $aResult = $oResult->toArray();
    }

    /**
     * @return mixed
     */
    protected function getAllUsers()
    {
        $oResult = \DB::table($this->sMyprofile)
            ->select(
                $this->sMyprofile . '.sImageName',
                $this->sUsers . '.name',
                $this->sUsers . '.id'
            )
            ->join($this->sUsers, $this->sMyprofile . '.userId', '=', $this->sUsers . '.id')
            ->orderBy($this->sMyprofile . '.id', 'desc')
            ->where($this->sMyprofile . '.delete', '==', 0)
            ->get();
        return $aResult = $oResult->toArray();
    }


}