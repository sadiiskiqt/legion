<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\User\UserService as UserService;

class UserController extends Controller
{
    protected $oUserService;

    public function __construct(UserService $oUserService)
    {
        $this->oUserService = $oUserService;
    }

    public function index()
    {
        return view('user.MyProfile');
    }

    public function myPost(Request $oRequest)
    {
        return $this->oUserService->userPost($oRequest);
    }

}
