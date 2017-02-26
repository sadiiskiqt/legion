<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\User\UserService as UserService;

class HomeController extends Controller
{
    protected $oUserService;

    public function __construct(UserService $oUserService)
    {
        $this->oUserService = $oUserService;
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aResults = array(
            'aResults' => $this->oUserService->getAllUserPost(),
            'sPath' => storage_path() . '/app/FileUpload'
        );

        return \View::make('home')->with('aResults', $aResults);
    }


}
