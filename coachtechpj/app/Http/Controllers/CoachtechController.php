<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\coachtech;

class CoachtechController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show(Request $request)
    {
        $items = new coachtech();
        $items->name = $request->name;
        $items->email = $request->email;
        $items->save();
        return view('thanks');
    }



}
