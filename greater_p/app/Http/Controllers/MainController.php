<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;

class MainController extends Controller
{
    public function viewIndex () {
        return view('index');
    }
    public function viewRegistration () {
        return view('registration');
    }
    public function viewLogin () {
        return view('login');
    }
    public function goToShit () {
        return redirect('https://www.php.net/');
    }
    public function viewRequest (Request $request) {
        dd($request->query('col'));
    }
    public function viewIP(Request $request)
    {
        $ipAddress = $request->headers("SERVER_NAME");
        dd($ipAddress);
    }
    public function viewLogs () {
        // $log = Log::find('shalimov');
        $logs = Log::where('name', 'shalimov')->get();
        dd($logs);
    }
    public function viewUsers (Request $request) {
        $user = User::find($request->query('id'));
        dd($user->name);
    }
}
