<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Contactos;
use App\Models\ContactosListado;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Contactos::orderBy('nombre', 'desc')->paginate(3);
        $categorias = Categorias::all();
        $listado = ContactosListado::all();
        return view('welcome', ['datos' => $datos, 'categorias' => $categorias, 'listado' => $listado]);
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
        $contactos = new Contactos();
        $contactos->nombre = $request->post('nombre');
        $contactos->telefono = $request->post('telefono');
        $contactos->email = $request->post('email');
        $contactos->id_categoria = $request->post('id_categoria');

        $contactos->save();

        return redirect()->route('contactos.index')->with('success', 'agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_contacto)
    {
        $contacto = Contactos::find($id_contacto);
        $categorias = Categorias::all();
        
        return view('actualizar', ['contacto' => $contacto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacto = Contactos::find($id);
        $contacto->id_categoria = $request->post('id_categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('email');
        $contacto->save();

        return redirect()->route('contactos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactos = Contactos::find($id);
        $contactos->delete();
        return redirect()->route('contactos.index');
    }
}
