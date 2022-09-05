<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users      = User::all()->count();
        $roles      = Role::all()->count();
        $permissions = Permission::all()->count();
        return view('admin.index', compact('users','roles','permissions'));
    }

}
