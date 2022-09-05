<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name'              => 'Bruno Rizzo',
            'email'             => 'bruno@email.com',
            'image'             => 'profile.png',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'),
            'role_id'           => Role::create(['name'=>'Administrador'])->id 
        ]);

        User::create([
            'name'              => 'Ananda Cristina',
            'email'             => 'ananda@email.com',
            'image'             => 'profile.png',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'),
            'role_id'           => Role::create(['name'=>'Gerente'])->id 
        ]);

        User::create([
            'name'              => 'Luíza Cristina',
            'email'             => 'luiza@email.com',
            'image'             => 'profile.png',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'),
            'role_id'           => Role::create(['name'=>'Analista'])->id 
        ]);

        Permission::create(['name' => 'usuário-criar']);
        Permission::create(['name' => 'usuário-visualizar']);
        Permission::create(['name' => 'usuário-editar']);
        Permission::create(['name' => 'usuário-excluir']);
        Permission::create(['name' => 'função-criar']);
        Permission::create(['name' => 'função-visualizar']);
        Permission::create(['name' => 'função-editar']);
        Permission::create(['name' => 'função-excluir']);
        Permission::create(['name' => 'atribuir-permissão']);
        
    }

}
