<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewBladeController extends Controller
{
        public function page_view()
        {
            return view("page.page_view");
        }

        public function page_blade()
        {
            $data = 1;
            return view("page.page_blade",compact('data'));
        }
}
