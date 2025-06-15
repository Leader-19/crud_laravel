<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function tage() {

        $tages = ["sport", "Work"];
        return view('tage', ['tages' => $tages]);
    }

    public function category () {
        return 'This is category page from controller';
    }

    public function blog () {
        return view('blog');
    }
}
