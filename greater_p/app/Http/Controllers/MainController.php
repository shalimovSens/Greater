<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function viewIndex () {
        return view('index');
    }
    public function viewTest () {
        return view('test');
    }
    public function goToShit () {
        return redirect('https://www.php.net/');
    }
    public function viewRequest (Request $request) {
        dd($request);
    }
    public function viewIP(Request $request)
    {
        $ipAddress = $request->server("SERVER_NAME");
        dd($ipAddress);
    }
}
