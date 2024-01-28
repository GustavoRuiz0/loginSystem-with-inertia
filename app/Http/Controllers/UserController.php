<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request){
        return Inertia::render('UserIndex', [
            'canCreateUsers' => Auth::user()->can('create', User::class),
            'users'          => User::all()
        ]);
    }

    public function create( Request $request){
        $this->authorize('create', User::class);
        
        return Inertia::render('Auth/UserForm');
    }
}
