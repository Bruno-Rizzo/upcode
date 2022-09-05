<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
       return view('admin.profiles.index');
    }

    public function edit()
    {
        return view('admin.profiles.edit');
    }

    public function password()
    {
        return view('admin.profiles.password');
    }

    public function updateProfile(Request $request)
    {

       $request->validate([
        'name'  => ['required' , 'min:3'],
        'email' => ['required' , 'email' , Rule::unique('users')->ignore(Auth::id()) ],
        'image' => ['image']
       ]); 

       $profile = $request->except('_token');

        if($request->image){

            $file =  $request->image;
            
            $filename = date('dmYHi').$request->image->getClientOriginalName();
            $file->move(public_path('backend/assets/images/users'),$filename);
            $profile['image'] = $filename;

        }

        $notification = array(
            'message'    => 'Perfil Atualizado com Sucesso!', 
            'alert-type' => 'info'
        );

        User::where('id',Auth::user()->id)->update($profile);
        return to_route('profiles.index')->with($notification);

    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'oldPassword'     => ['required'],
            'password'        => ['required' , 'min:8'],
            'confirmPassword' => ['same:password']
        ],[
            'oldPassword.required' => 'O campo Senha Atual é obrigatório', 
            'password.required'    => 'O campo Nova Senha é obrigatório', 
            'password.min'         => 'O campo Nova Senha deve ter pelo menos 8 caracteres', 
            'confirmPassword.same' => 'Os campos Nova Senha e Confirma Senham não são iguais', 
        ]);

        if(Hash::check($request->oldPassword , Auth::user()->password)){

            $validated['password'] = bcrypt($request->password);
            User::find(Auth::id())->update($validated);

            $notification = array(
                'message'    => 'Senha Atualizada com Sucesso!',
                'alert-type' => 'info'
            );

            return to_route('profiles.password')->with($notification);

        }else{

            $notification = array(
                'message'    => 'Senha de Usuário Incorreta!!',
                'alert-type' => 'error'
            );

            return to_route('profiles.password')->with($notification);

        }

    }

}
