<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::select('id', 'name')->orderByDesc('id')->get();
        return view('seguridad.roles', compact('roles'));
    }
}
