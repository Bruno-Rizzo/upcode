<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required','min:3'],
            'email'    => ['required','unique:users,email','email'],
            'password' => ['required','min:8'],
            'role_id'  => 'required'
        ],[
            'email.unique'     => 'Este email já está sendo utilizado',
            'role_id.required' => 'O campo Função é obrigatório'
        ]);

        $validated['password'] = bcrypt($request->password);
        $validated['email_verified_at'] = date('Y-m-d H:i:s');

        User::create($validated);

        $notification = array(
            'message'    => 'Usuário Criado com Sucesso!', 
            'alert-type' => 'info'
        );

        return to_route('users.index')->with($notification);
    }

    
    public function edit(User $user)
    {
       $roles = Role::all(); 
       return view('admin.users.edit', compact('user','roles'));
    }

    
    public function update(Request $request, User $user)
    {

        $validated = $request->validate([
            'name'     => ['required','min:3'],
            'email'    => ['required','email',Rule::unique('users')->ignore($user->id)],
            'role_id'  => 'required'
        ],[
            'role_id.required' => 'O campo Função é obrigatório'
        ]);

        User::find($user->id)->update($validated);

        $notification = array(
            'message'    => 'Usuário Editado com Sucesso!', 
            'alert-type' => 'info'
        );

        return to_route('users.index')->with( $notification);

    }

    
    public function deleteUser(Request $request)
    {
        User::find($request->id)->delete();

        $notification = array(
            'message'    => 'Usuário Excluído com Sucesso!', 
            'alert-type' => 'error'
        );

        return to_route('users.index')->with( $notification);
    }

}
