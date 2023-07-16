<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Didimo'
        ]);
    }

    public function count()
    {
        $data = Sensor::all();
        return view('count', ['data' => $data]);
    }

    public function save()
    {
        Sensor::where('id', 1)->update(['cahaya' => request()->cahaya]);
    }


    function reset()
    {
        Sensor::where('id', 1)->update(['cahaya' => 0]);
        return redirect('/');
    }
}
