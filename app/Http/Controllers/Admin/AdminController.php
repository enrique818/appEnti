<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller{

    public function index(){

        $user = User::All();
        return view('admin.index', [
            'user' => $user
        ]);

    }

}
