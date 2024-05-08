<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SingleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        //
        session::put('key', 'default');
        $value = session::get('key');

        return "Data ". $value;
    }
}
