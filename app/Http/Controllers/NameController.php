<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index() {
        return view('name.index', [
            'app_env' => config('myconfig.APP_ENV'),
            'name' => config('myconfig.NAME'),
            'local' => config('myconfig.locale'),
            'timezone' => config('myconfig.timezone')
        ]);
    }
}
