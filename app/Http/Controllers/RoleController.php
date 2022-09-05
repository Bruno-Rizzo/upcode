<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
   
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    
    public function create()
    {
        return view('admin.roles.create');
    }

    
    public function store(Request $request)
    {
       $validated = $request->validate([
        'name' => ['required','min:5',Rule::unique('roles')]
       ]);

       Role::create($validated);

       $notification = array(
        'message'    => 'Função Criada com Sucesso!',
        'alert-type' => 'info'
       );

       return to_route('roles.index')->with($notification);

    }

    
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }

    
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate([
            'name' => ['required','min:5',Rule::unique('roles')->ignore($role->id)]
        ]);
        
           Role::find($role->id)->update($validated);

           $notification = array(
            'message'    => 'Função Editada com Sucesso!',
            'alert-type' => 'info'
           );
    
           return to_route('roles.index')->with($notification);
        
    }

    
    public function deleteRole(Request $request)
    {
        Role::find($request->id)->delete();

        $notification = array(
            'message'    => 'Função Excluída com Sucesso!', 
            'alert-type' => 'error'
        );

        return to_route('roles.index')->with( $notification);

    }


    public function assignPermission(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);

        $notification = array(
            'message'    => 'Permissões Atribuídas com Sucesso!', 
            'alert-type' => 'info'
        );

        return to_route('roles.index')->with( $notification);

    }

    
}
