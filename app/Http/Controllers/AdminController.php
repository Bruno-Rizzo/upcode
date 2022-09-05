<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function password()
    {
        return view('admin.settings.password');
    }

    public function editPassword(User $user)
    {
        return view('admin.settings.edit_password', compact('user'));
    }

    public function searchUser(Request $request)
    {
        $request->validate(['name' => 'required']);
        $users = User::where('name', 'LIKE', '%' . $request->name . '%')->get();
        return view('admin.settings.password', compact('users'));
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password'         => ['required','min:8'],
            'confirm_password' => ['required','same:password'],
        ],[
            'confirm_password.same' => 'Os campos Nova Senha e Confirma Senha não conferem'
        ]);

        $validated['password'] = bcrypt($request->password);

        User::find($request->id)->update($validated);

        $notification = array(
            'message'    => 'Senha Alterada com Sucesso!', 
            'alert-type' => 'info'
        );

        return to_route('settings.password')->with( $notification);

    }

}
