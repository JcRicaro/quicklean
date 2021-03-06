<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tip;

class TipController extends Controller
{
    public function index(Tip $tip)
    {
    	return response()->json(['data' => $tip->all()]);
    }

    public function show(Tip $tip)
    {
    	return response()->json(['data' => $tip]);
    }
}
