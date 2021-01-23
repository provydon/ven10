<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    public function googleSheetsCallback(Request $request){
        dd(request()->query('code'));
    }
}
