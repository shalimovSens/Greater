<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function viewLogs () {
        $username = Auth::user()->name;
        $logs = Log::where('name', $username)->get();
        return $logs->toJson();
    }

    // public function createLog (Request $request) {
    //     $data = $request->validate([
    //         'name' => 'string', 'count' => 'date_format:H:i:s',
    //     ]);
    //     Log::create($data);
    //     // return response()->json($request->all());
    //     return collect($data)->toJson();
    // }
    public function createLog (Request $request) {
        $username = Auth::user()->name;
        $data = $request->validate([
            'count' => 'date_format:H:i:s', 'created_at' => 'date',
        ]);
        $data['name'] = $username;
        // 'name' => 'string', 
        $oldCount = Log::where('created_at', $data['created_at'])->where('name', $data['name'])->get();
        if (boolval(count($oldCount))) {
            $oldCount = Log::where('created_at', $data['created_at'])->where('name', $data['name'])->get()[0]->count;
            $date = strtotime('2000-01-01 00:00:00');
            $sumOfCount = (strtotime("2000-01-01 {$oldCount}") - $date) + (strtotime("2000-01-01 {$data['count']}") - $date);
            $sumOfCount = sprintf('%02d:%02d:%02d', ($sumOfCount/ 3600),($sumOfCount/ 60 % 60), $sumOfCount% 60);
            $data['count'] = $sumOfCount;
        }
        $log = Log::updateOrCreate([
            'created_at' => $data['created_at'],
            'name' => $data['name'],
        ],$data);
        $allLogs = Log::where('name', $username)->get();
        return response()->json($allLogs);
        // return collect($sumOfCount)->toJson();
    }
}
