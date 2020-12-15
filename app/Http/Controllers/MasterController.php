<?php

namespace App\Http\Controllers;

use App\Project;
use App\TypeTransaction;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\DataTablest;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function user()
    {
        $getUsr = New User();
        $data['user'] = $getUsr->getListUsers();
        $data['role'] = Role::all();
        return view('master.user', $data);
    }

    public function userInsert(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return $user->assignRole($request->role);
    }

    public function changeRole(Request $request)
    {
        $user = User::find($request->id);
        return $user->syncRoles($request->role);
    }

    public function permission($idRole, $idUser)
    {
        $data['id'] = $idUser;
        $data['permissionActive'] = DB::select("SELECT * FROM `permissions` WHERE id IN (SELECT permission_id FROM model_has_permissions WHERE model_id='" . $idUser . "')");
        $data['permissionNotActive'] = DB::select("SELECT * FROM `permissions` WHERE id NOT IN (SELECT permission_id FROM role_has_permissions a WHERE role_id='" . $idRole . "')");
        return view('modal.permission', $data);
    }

    public function givePermission(Request $request)
    {
        $user = User::find($request->id);
        return $user->givePermissionTo($request->permission);
    }

    public function revokePermission(Request $request)
    {
        $user = User::find($request->id);
        return $user->revokePermissionTo($request->permission);
    }

    public function role()
    {
        $data['role'] = Role::all();
        return view('master.role', $data);
    }

    public function roleInsert(Request $request)
    {
        return Role::create(['name' => $request->role]);
    }

    public function rolePermission($id)
    {
        $data['id'] = $id;
        $role = Role::find($id);
        $data['permissionActive'] = $role->getAllPermissions();
        $data['permissionNotActive'] = DB::select("SELECT * FROM `permissions` WHERE id NOT IN (SELECT permission_id FROM role_has_permissions WHERE role_id='" . $id . "')");
        return view('modal.role_permission', $data);
    }

    public function giveRolePermission(Request $request)
    {
        $role = Role::find($request->id);
        return $role->givePermissionTo($request->permission);
    }

    public function revokeRolePermission(Request $request)
    {
        $role = Role::find($request->id);
        return $role->revokePermissionTo($request->permission);
    }

    public function project()
    {
        $data['project'] = Project::all();
        return view('master.project', $data);
    }

    public function projectInsert(Request $request)
    {
        return Project::create([
            'projectName' => $request->project,
            'initial' => $request->inisial,
        ]);
    }

    public function typeTransaction()
    {
        $data['typeTransaction'] = TypeTransaction::all();
        return view('master.type_transaction', $data);
    }

    public function typeTransactionInsert(Request $request)
    {
        return TypeTransaction::create([
            'category' => $request->category,
            'typeName' => $request->typeName,
        ]);
    }
}
