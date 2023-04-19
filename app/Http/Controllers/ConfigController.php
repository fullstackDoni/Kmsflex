<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function index(Request $request){
        $req = null;
        if($request->key == 'migrate'){
            $req = Artisan::call("migrate");
        }
        if($request->key == 'seed'){
            $req = Artisan::call("db:seed");
        }
        if($request->key == 'optimize'){
            $req = Artisan::call("optimize");
        }
        if($request->key == 'generate'){
            $req = Artisan::call("key:generate");
        }
        return response()->json(['message'=>$req]);
    }
}
