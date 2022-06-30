<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use DB;
use View;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->get();
        $permission = Permission::all();
        return View::make('rolesRights.index',[
            'roles' => $roles,
            'permission' => $permission
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        return $this->successResponse($role, 'Role added successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        return $this->successResponse($role, 'Role fetched successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        return $this->successResponse($role, 'Role updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roleAssignedAlready = DB::table('model_has_roles')->where('role_id',$id)->count();
        if($roleAssignedAlready){
            return $this->errorResponse([],'Oops! Role is already assigned to user.','',422);
        }
        Role::where('id',$id)->delete();
        return $this->successResponse([], 'Role deleted successfully.');
    }



    public function save_permission(Request $request)
    {
        $permissions = $request->input('permissions');
        $arr= [];
        DB::table('role_has_permissions')->delete();
        foreach($permissions as $key => $val){
            $k = explode('_',$key);
            $input['role_id'] = $k[0];
            $input['permission_id'] = $k[1];
            if (!in_array($k[0], $arr))
            {
              array_push($arr, $k[0]);
            }
            DB::table('role_has_permissions')->insert($input);

        }
        foreach ($arr as $val) {
            $res = DB::table('role_has_permissions')->where('role_id',$val)->pluck('permission_id');
            $role = Role::where('id',$val)->first();
            $role->syncPermissions($res);
        }
        return $this->successResponse([], 'Permission assinged successfully');
    }
}
