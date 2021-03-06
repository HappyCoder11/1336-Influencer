<?php

namespace App\Http\Controllers;

use App\Services\SocialInstagramAccountService;
use Illuminate\Http\Request;
use Socialite;
use GuzzleHttp\Client;

class InstagramAuthController extends Controller
{

    /**
     * Initialize Facebook fields to override
     */


    /**
     * Create a redirect method to facebook api.
     *
     * @return void
     */


    public function redirect()
    {
        return Socialite::driver('instagram')->redirect();

    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */



}
