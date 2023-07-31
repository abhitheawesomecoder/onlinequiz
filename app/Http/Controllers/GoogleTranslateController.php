<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GoogleTranslateController extends Controller
{
    public function googleTranslateChange(Request $request)
    {
        App::setLocale($request->lang);

        Session::put('locale',$request->lang);

        return redirect()->back();
    }
}
