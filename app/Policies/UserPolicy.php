<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

  
    public function view()
    {
        return Auth::user()->role->hasPermission('usuário-visualizar');
    }
    

}
