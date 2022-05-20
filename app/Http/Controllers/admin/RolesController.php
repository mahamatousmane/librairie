<?php

namespace App\Http\Controllers\admin;

use Validator;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

class rolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::all();
        $role = Role::all();
        return view('admin.roles.index',compact('role','permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'string', 'max:255','unique:roles'],
            'permissions'=>['required'],
        ]);
            $role = Role::Create([
                'name' => $request->name,
                'guard_name'=>'web'
            ]);
            $role->syncPermissions($request->permissions);
            toast('Your Post as been submited!','success');
            return redirect()->back()->with('flash_message_success','Roles inséré avec succès');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale,$id)
    {
       $id = Crypt::decrypt($id);
        $permission = Permission::all();
        $role = Role::findOrFail($id);
        $var = \App::getLocale();
        return view('admin.roles.edit',compact('role','var','permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$locale,$id)
    {
        $role = Role::findOrFail($id);
        $var = \App::getLocale();
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permissions);
        return redirect()->route('roles.index',$var)->with('flash_message_success','Roles mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deleteRoles(Request $request)
    {
        $role =  Role::findOrFail($request->id);
        $role->delete();
        return redirect()->back()->with('flash_message_success','role supprimé avec succès');
    }
    public function editRoles(){
        dd('ok');
    }
}
