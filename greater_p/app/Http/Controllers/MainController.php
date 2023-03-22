<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Request;

class MainController extends Controller
{
    public function viewIndex () {
        $user = Auth::user();
        return view('index')->with('username', $user ? $user->name : 'You');
    }
    // public function viewRegistration () {
    //     return view('registration');
    // }
    public function viewLogin () {
        return view('login');
    }
    public function goToShit () {
        return redirect('https://www.php.net/');
    }
    public function viewRequest (Request $request) {
        dd($request);
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
    public function updateLog (Request $request) {
        $log = Log::find($request->query('name'));
        $log->update([
            'count' => $request->query('count'),
        ]);
        dd($log);
    }
}
