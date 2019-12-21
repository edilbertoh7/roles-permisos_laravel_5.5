<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return view ('users.index',compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        /*se buscan todos los roles diponibles dentro del sitema 
        para poder asignar los que se deseen a un determinado usuario*/
    $roles = Role::get();
        return view('users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        /*primero se actualiza al usuario */
        $user->update($request->all());
        /*luego se actualizan los roles*/
        $user->roles()->sync($request->get('roles'));
        /*por ultimo se retorna un a vista*/
        return redirect()->route('users.edit',$user->id)
        ->with('info', 'Usuario actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
/*la siguiente linea elimina el usero biscando por su id*/
       // $user = User::find($id)->delete();
        return back()->with('info','Usuario eliminado correctamente');

      
    }
}
