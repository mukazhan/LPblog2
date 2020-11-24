<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {

        if (view()->exists('index'))
        {
            $data = array('title'=>'Index page');
            return view('index', $data );
        }

        abort(404);

    }
}
