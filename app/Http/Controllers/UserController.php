<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'roles']);
    }

    public function index()
    {
        //traer todos los usuarios
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {

            User::create($request->all());
            // redireccionar a usuarios index
            return redirect()->route('users.index')->with('Estado', 'Operacion De Registro Realizada Con Exito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //tomo el id y consulto
        $user = User::findOrFail($id);
        //redireciono
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
        // consulto la tabla roles
        $roles = Role::all();
        //tomo el id y consulto
        $user = User::findOrFail($id);
        //redireciono
        return view('users.edit', compact(['user','roles']));
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
        // falta crear request para validar este formulario
        //tomo el id y consulto
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index')->with('Estado', 'Usuario actualizado con exito!');
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
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('Estado', 'Usuario eliminado con exito!');
    }
}
