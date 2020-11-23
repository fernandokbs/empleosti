<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class CodigoFacilitoOauthController extends Controller
{
    public function redirect()
    {
        return Socialite::with('codigofacilito')->redirect();
    }

    public function responseCallback(Request $request)
    {
        $user = Socialite::with('codigofacilito')->user();
        dd($user);
    }
}
