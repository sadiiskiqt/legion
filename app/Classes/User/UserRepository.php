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

    protected $sCommentTable = 'comment';


    public function addUserComment($iUserId, $sComment)
    {
        \DB::table($this->sCommentTable)->insert(
            array(
                'userId' => $iUserId,
                'userComment' => $sComment,
                'delete' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            )
        );
    }

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return \DB::table($this->sCommentTable)->orderBy('id', 'desc')->first();
    }

    public function saveFileImageVideo()
    {

    }

}