<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
// use DragonCode\Contracts\Cashier\Http\Response;
use Spatie\Permission\Models\Role;
// use DB;
use Illuminate\Support\Facades\DB;
// use Hash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
// use Illuminate\Support\Facades\View;

// use DragonCode\Contracts\Cashier\Http\Response;
// use Illuminate\Contracts\View\View;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resultado = User::select('users.*', 'roles.name as role_name')
        ->join('roles', 'users.roleId', '=', 'roles.id')
        ->get();

        $users = $resultado;
        $roles = Role::all();

        return view('users.index', compact('users', 'roles'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
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
            'name' => 'required',
            'second_name' => 'nullable|string|max:255',
            'surname' => 'required',
            'second_surname' => 'nullable|string|max:255',
            'birthday' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);

        $user = new User;
        $user->name = $request->name;
        $user->second_name = $request->second_name;
        $user->surname = $request->surname;
        $user->second_surname = $request->second_surname;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roleId = $request->roles;

        $user->assignRole($request->input('roles'));

        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');

        // return response()->json($user);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.update', compact('user', 'roles', 'userRole'));
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
        // $this->validate($request, [
        //     'name' => 'required',
        //     'surname' => 'required',
        //     'birthday' => 'required',
        //     'email' => 'required|email|unique:users,email,' . $id,
        //     'password' => 'same:confirm-password',
        //     'roles' => 'required'
        // ]);

        // // $input = $request->all();
        // if (!empty($input['password'])) {
        //     $input['password'] = Hash::make($request->password);
        // } else {
        //     $input = Arr::except($request, array('password'));
        // }

        $user = User::find($id);
        // $user->update($input);
        $user->name = $request->name;
        $user->second_name = $request->second_name;
        $user->surname = $request->surname;
        $user->second_surname = $request->second_surname;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->roleId = $request->roles;

        // $user->assignRole($request->input('roles'));
        $user->roles()->sync([$request->roles]); // Actualiza los roles del usuario

        $user->save();
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        // $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
        ->with('success', 'User updated successfully ');
        // return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}