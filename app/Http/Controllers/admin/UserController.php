<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        $user = User::all();
        return view('admin.users.index',compact('role','user'));
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
        // dd($request->all());die();
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'max:255','unique:users'],
            'telephone'=>['required','numeric'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'roles'=>['required'],
        ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->telephone = $request->telephone;
            $user->password = Hash::make($request->password);
            if($request->file('photo')!='')
            {
                // dd('ok');
            $file=$request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileNameWihtExtension = $file->getClientOriginalName();
            $fileNameWihtoutExtension = pathinfo($fileNameWihtExtension, PATHINFO_FILENAME);
            $fileNameToStore=$fileNameWihtoutExtension.'_'.time().'_thumb.'.$extension;
            $dir = 'public/image/profile';
            $temp_name = uniqid();
            $thumb_resize=100;
            $fich = $request->file('photo')->move($dir, $fileNameToStore);
            $user->profile = $fich;
            }
            else
            {
                $user->profile = "pas de photos";
            }
            $user->save();
            $user->syncRoles($request->roles);

            return redirect()->back()->with('flash_message_success','Utilisateur inséré avec succès');
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
        $role = Role::all();
        $user = User::findOrFail($id);
        $var = \App::getLocale();
        return view('admin.users.edit',compact('role','var','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$locale, $id)
    {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'max:255'],
            'telephone'=>['required','numeric'],
        ]);
            $user =  User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->telephone = $request->telephone;
            if($request->file('photo')!='')
            {
            $file=$request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileNameWihtExtension = $file->getClientOriginalName();
            $fileNameWihtoutExtension = pathinfo($fileNameWihtExtension, PATHINFO_FILENAME);
            $fileNameToStore=$fileNameWihtoutExtension.'_'.time().'_thumb.'.$extension;
            $dir = 'public/image/profile';
            $temp_name = uniqid();
            $thumb_resize=100;
            $fich = $request->file('photo')->move($dir, $fileNameToStore);
            $user->profile = $fich;
            }
            $user->save();
            $user->syncRoles($request->roles);
            $var = \App::getLocale();

            return redirect()->route('users.index',$var)->with('flash_message_success','Utilisateur mis à jour avec succès');
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
    public function deleteUsers(Request $request)
    {
        $user =  User::findOrFail($request->id);
        $user->delete();
        return redirect()->back()->with('flash_message_success','Utilisateur supprimé avec succès');
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
    public function resetpwd(){
        return view('auth/forgot-password');
    }

    public function createuser(Request $request)
    {
        $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'max:255','unique:users'],
            'telephone'=>['required','numeric'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->syncRoles('etudiant');
        return redirect()->back()->with('flash_message_success','Utilisateur inséré avec succès, connectez vous svp');
    }
}
