<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\User\UserService as UserService;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected $oUserService;

    /**
     * UserController constructor.
     * @param UserService $oUserService
     */
    public function __construct(UserService $oUserService)
    {
        $this->oUserService = $oUserService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $aResults = array(
            'aGetAllUserPostImages' => $this->oUserService->getUserPostImages($id),
            'iPersonId' => $id,
            'aPersonData' => $this->oUserService->getMyProfileData(),
        );
        return view('user.MyProfile')->with('aResults', $aResults);;
    }

    /**
     * @param Request $oRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function myPost(Request $oRequest)
    {
        return $this->oUserService->userPost($oRequest);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function legion()
    {
        return view('LegionData');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fbgallery()
    {
        return view('fbgallery');

    }

    /**
     * @param Request $oRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function myProfile(Request $oRequest)
    {
        return $this->oUserService->updateMyProfile($oRequest);
    }
}
