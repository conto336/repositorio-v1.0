<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.users-register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('admin.users-register')->with(['danger' => "las contraseñas no son iguales"]);
        } else {
            if ($request->carrer == 'Electronica' || $request->carrer == 'Industrial' || $request->carrer == 'Geologia') {
                $initials = $request['name'][0] . $request['lastname'][0];
                User::create([
                    'name' => $request['name'],
                    'lastname' => $request['lastname'],
                    'email' => $request['email'],
                    'role' => $request['role'],
                    'initials' => strtoupper($initials),
                    'carrer' => strtoupper($request['carrer']),
                    'carnet' => $request['carnet'],
                    'password' => Hash::make($request['password']),
                ]);

                return redirect()->route('admin.users-register')->with(['success' => 'El usuario ' . strtoupper($request->name) . ' con número de carnet: ' . $request->carnet . ' se ha registrado con exito']);
            } else {
                return redirect()->route('admin.users-register')->with(['warning' => 'La carrera: ' . $request->carrer . ' NO EXISTE']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userElectronica = User::where('carrer', 'ELECTRONICA')->get();
        $totalUserElectronica = $userElectronica->count();

        $userIndustrial = User::where('carrer', 'INDUSTRIAL')->get();
        $totalUserIndustrial = $userIndustrial->count();

        $userGeologia = User::where('carrer', 'GEOLOGIA')->get();
        $totalUserGeologia = $userGeologia->count();

        return view('admin.users.users-show', compact('userElectronica', 'totalUserElectronica', 'userIndustrial', 'totalUserIndustrial', 'userGeologia', 'totalUserGeologia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        $updateUser = $id;
        return view('admin.users.users-edit', compact('updateUser'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        if ($id->id === 1 && $id->role === 'ADMIN') {
            return redirect()->back()->with(['danger' => 'NO PUEDES ELMINAR AL ADMINISTRADOR DEL SITIO']);
        }
        $id->delete();
        return redirect()->back()->with(['success' => 'Se ha borrado el usuario']);
    }
}
