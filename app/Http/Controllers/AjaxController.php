<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function web()
    {
        return view('web');
    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        return response()->json(['success'=>$input], 200);
    }
}
