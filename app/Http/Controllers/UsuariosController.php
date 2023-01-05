<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsuariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->where('id', '!=', Auth::user()->id)->get();
        $roles = Role::all();
        return view('usuarios.index', compact('users', 'roles'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', /*'confirmed', Rules\Password::defaults()*/],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => 'Sin Definir',
            'active' => 1,
        ]);

        $user->syncRoles($request->rol);

        return redirect('/usuarios')->with('success', 'Se ha Registrado el Usuario con éxito');
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
    public function edit($id)
    {
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $data = User::where('id', $id)->first();
            $roles = Role::all();
            return view('usuarios.edit', compact('data', 'roles'));
        }else{
            return redirect('/usuarios')->with('danger', 'Problemas para Mostrar el Registro.');
        }
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
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                // 'password' => ['required', /*'confirmed', Rules\Password::defaults()*/],
            ]);

            $registro = User::where('id', $id)->first();
            $registro->name = $request->name;
            $registro->email = $request->email;
            $registro->password = Hash::make($request->password);
            $registro->save();

            $registro->roles()->detach();

            $registro->syncRoles($request->rol);

            return redirect('/usuarios')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('/usuarios')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $registro = User::where('id', $id)->first();
            $registro->active = 0;
            $registro->save();

            return redirect('/usuarios')->with('success', 'Registro Inactivado Exitosamente');
        }else{
            return redirect('/usuarios')->with('danger', 'Problemas para Mostrar el Registro.');
        }
    }
}
