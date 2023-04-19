<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function index(Request $request){

        $res = null;
        if ($request->key == 'migrate') {
            $res = Artisan::call("migrate");
        }
        if ($request->key == 'seed') {
            $res = Artisan::call("db:seed");
        }
        if ($request->key == 'optimize') {
            $res = Artisan::call("optimize");
        }
        if ($request->key == 'generate') {
            $res = Artisan::call("key:generate");
        }
        return response()->json(['message' => $res]);
    }
}
